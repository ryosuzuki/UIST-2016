<div id="paper-modal" class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    <span id="title">Paper Title</span>
    <div id="type" class="ui right label" style="float: right"></div>
  </div>

  <div class="content">
    <h3>Authors</h3>
    <div id="authors" class="ui very relaxed horizontal divided list">
      <div class="item">
        <div class="content">
          <div id="name" class="header">Author Name</div>
          <p>
            <span id="affiliation">Author Affiliation</span>,
            <br>
            <span id="location">Author Location</span>
          </p>
        </div>
      </div>
    </div>
    <div class="ui horizontal divider"></div>
    <h3>Video Preview</h3>
    <div class="video-container">
      <iframe id="video" width="560" height="300" src="https://www.youtube.com/embed/8tX1XNq96pQ" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="ui horizontal divider"></div>
    <h3>Abstract</h3>
    <p id="abstract">Paper Abstract</p>
  </div>
  <div class="actions">
    <div class="ui right close icon button">
      Close
    </div>
  </div>
</div>

<script>
$('#modal-button').click(function(event) {
  let id = $(this).data('paper-id')
  var paper = window.program.papers[id]
  var modal = $('#paper-modal')
  $('#title', modal).text(paper.title)
  $('#type', modal).text(paper.type)
  $('#abstract', modal).text(paper.abstract)
  $('#video', modal).attr('src', 'https://www.youtube.com/embed/' + paper.video)
  $('#authors', modal).empty()
  var authors = paper.authors
  for (var i=0; i<authors.length; i++) {
    var author = authors[i]
    var html = [
      '<div class="item">',
      '  <div class="content">',
      '    <div class="header">',
            author.name,
      '    </div>',
      '    <p>',
      '      <span>',
              author.affiliation,
      '      </span>',
      '      <br>',
      '      <span>',
              author.location,
      '      </span>',
      '    </p>',
      '  </div>',
      '</div>',
    ].join('')
    $('#authors', modal).append(html)
  }

  $('.ui.modal')
  .modal({
    transition: 'fade down',
    inverted: true,
    blurring: true
  })
  .modal('show');
});
</script>


