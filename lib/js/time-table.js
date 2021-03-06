let dataURLn
if (window.location.hostname === 'localhost') {
  dataURL = '/lib/js/program/program.json'
} else {
  dataURL = 'https://uist.acm.org/uist2016/lib/js/program/program.json'
}

/*
$.getJSON(dataURL, function(res) {
  console.log(res)
  window.program = res
  window.papers = program.papers
  window.sessions = program.sessions
})
*/

 /*
  $('.session').each(function() {
    let sessionId = $(this).data('session')
    let session = window.sessions[`session-${sessionId}`]
    console.log(session)
    $(this).attr('id', `session-${sessionId}`)
    $('.session-location', this).text(sessionId.split('-')[1] === 'a' ? 'Auditorium' : 'Ballroom')
    $('.session-title', this).text(`Session ${session.id}: ${session.title}`).attr('href', `#session-${sessionId}`)
    $('.session-chair', this).text(`Chair: ${session.chair.name}`)
    // $('.session-chair', this).text(`Chair: ${session.chair.name} (${session.chair.affiliation})`)

    for (let i=0; i<session.papers.length; i++) {
      let paperId = session.papers[i]
      let paper = window.papers[paperId]

      let authorList = paper.authors.map(function (author) {
        return author.name
      }).join(', ')

      if (paperId === 'uist3223') {
        authorList = ['Benjamin Lafreniere', 'Tovi Grossman', 'Fraser Anderson', 'Justin Matejka', 'Heather Kerrick', 'Danil Nagy', 'Lauren Vasey', 'Evan Atherton', 'Nicholas Beirne', 'Marcelo Coelho', 'Nicholas Cote', 'Steven Li', 'Andy Nogueira', 'Long Nguyen', 'Tobias Schwinn', 'James Stoddart', 'David Thomasson', 'Ray Wang', 'Thomas White', 'David Benjamin', 'Maurice Conti', 'Achim Menges', 'George Fitzmaurice']
      }
      if (paperId === 'uist2629') {
        authorList = ['Snehalkumar (Neil) S. Gaikwad', 'Durim Morina', 'Adam Ginzberg', 'Catherine Mullings', 'Shirish Goyal', 'Dilrukshi Gamage', 'Christopher Diemert', 'Mathias Burton', 'Sharon Zhou', 'Mark Whiting', 'Karolina Ziulkoski', 'Alipta Ballav', 'Aaron Gilbee', 'Senadhipathige S. Niranga', 'Vibhor Sehgal', 'Jasmine Lin', 'Leonardy Kristianto', 'Angela Richmond-Fuller', 'Jeff Regino', 'Nalin Chhibber', 'Dinesh Majeti', 'Sachin Sharma', 'Kamila Mananova', 'Dinesh Dhakal', 'William Dai', 'Victoria Purynova', 'Samarth Sandeep', 'letshine Chandrakanthan', 'Tejas Sarma', 'Sekandar Matin', 'Ahmed Nasser', 'Rohit Nistala', 'Alexander Stolzoff', 'Kristy Milland', 'Vinayak Mathur', 'Rajan Vaish', 'Michael S. Bernstein']
      }
      if (paperId === 'uist1574') {
        authorList = ['Sergio Orts-Escolano', 'Christoph Rhemann', 'Sean Fanello', 'David Kim', 'Adarsh Kowdle', 'Wayne Chang', 'Yury Degtyarev', 'Philip L Davidson', 'Sameh Khamis', 'Mingsong Dou', 'Vladimir Tankovich', 'Charles Loop', 'Qin Cai', 'Philip A Chou', 'Sarah Mennicken', 'Julien Valentin', 'Vivek Pradeep', 'Shenlong Wang', 'Sing Bing Kang', 'Pushmeet Kohli', 'Yuliya Lutchyn', 'Cem Keskin', 'Shahram Izadi']
      }


      let html = [
        '<div class="ui segment paper" data-id="'+paperId+'">',
        '  <b class="title">',
            paper.title,
        '  </b>',
        '  <p class="authors">',
            authorList,
        '  </p>',
        '</div>',
      ].join('')
      $(html).appendTo(this)
      .hover(function(event) {
        $(this).addClass('select')
      }, function(event){
        $(this).removeClass('select')
      })
      .click(function(event) {
        let id = $(this).data('id')
        let paper = window.program.papers[id]
        showModal(paper)
      })
    }
  })
})
*/

$(function() {
  $('.session .paper').hover(function(event) {
    $(this).addClass('select')
  }, function(event){
    $(this).removeClass('select')
  })
})

$(document).on('click' , '.session .paper' ,function(event) {
  let id = $(this).data('id')
  let paper = window.program.papers[id]
  let modal = $('#paper-modal')
  $('#title', modal).text(paper.title)
  $('#type', modal).text(paper.type)
  $('#abstract', modal).text(paper.abstract)
  $('#video', modal).attr('src', 'https://www.youtube.com/embed/' + paper.video)
  $('#authors', modal).empty()
  let authors = paper.authors
  for (let i=0; i<authors.length; i++) {
    let author = authors[i]
    let html = [
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
    duration: 300,
  })
  .modal('show');
    // blurring: true
});

