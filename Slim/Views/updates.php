<script type="text/javascript" src="./lib/js/updates.js"></script>

<script type="text/javascript">
    Updates.init("./lib/updates.json","#updateTemplate", "#updateList", "update");
</script>

<div class="section updates">
    <div class="blk-2">
        <h2>Twitter</h2><br />
        <div style="padding-right: 40px; text-align: center;">
            <a class="twitter-timeline" href="https://twitter.com/ACMUIST" data-widget-id="516808131494424576">Tweets by @ACMUIST</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </div><div id="updateContainer" class="blk-2"><h2>Updates</h2><br />
        <div id="updateList">
            <!-- Updates get generated here -->
        </div>
    </div>
</div>

<!-- Template for generating updates -->
<div class="update" id="updateTemplate" style="display: none;">
    <span style="color:gray;" class="date"></span>
    <p class="text"></p>
</div>