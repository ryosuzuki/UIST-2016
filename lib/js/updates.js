var Updates = (function() {

    var _template = null;
    var _container = null;
    var _mode = null;

    function _readUpdates (file) {
        /* Fetch updates from JSON file */
        var xhr = new XMLHttpRequest();
        xhr.open("GET", file, true);
        xhr.onload = function() {
            if(this.status == 200) {
                console.log("Success");
                var data = JSON.parse(this.responseText);
                _putUpdates(data);
            }
        };
        xhr.send();
    }

    function _putUpdates (data) {
        /* Clone template for each data entry and place into container */
        data["updates"].forEach(function(e, i) {
            if(e.type === _mode) {

                var update = $(_template).clone();
                var id = "update_" + i;

                var dateArray = e.date.split("-");
                var year = dateArray[0];
                var month = dateArray[1];
                var day = dateArray[2];

                $(update).attr("id", id);
                $(update).children("span").html(e.date);
                $(update).children("p").html(e.text);

                /* Cross out if this is a date item and the date has passed */
                if(e.type === "deadline") {
                    var date = new Date(month + "/" + day + "/" + year);
                    var now = new Date();
                    if(now > date) {
                        $(update).css("text-decoration", "line-through");
                    }
                }

                $(update).show();
                $(_container).append(update);
            }
        });
    }
    return {
        /* Outside world accesses these methods */
        init: function(f, t, c, m) {
            _template = t;
            _container = c;
            _mode = m;
            _readUpdates(f);
        }
    }
}());