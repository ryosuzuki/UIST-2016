
const fs = require('fs')
const cheerio = require('cheerio-httpcli')

function getVideos(papers) {
  for (let key in papers) {
    let paper = papers[key]
    let query = `https://www.youtube.com/results?search_query=acm+sigchi+${paper.title.split(' ').join('+')}`
    cheerio.fetch(query, { q: 'node.js'}, function (err, $, res) {
      if (err) {
        console.log(err)
      }
      let videoId = $('#results .yt-lockup').data('context-item-id')
      if (!videoId) {
        console.log(`${paper.title} is missing`)
      } else {
        console.log(`${paper.title}: ${videoId}`)
      }
    })
  }
}

let str = fs.readFileSync('papers.json', 'utf8')
let papers = JSON.parse(str)
// getVideos(papers)

let str2 = fs.readFileSync('videos.json', 'utf8')
let videos = JSON.parse(str2)
for (let key in papers) {
  let paper = papers[key]
  let videoId = videos[paper.title]
  console.log(videoId)
  paper.video = videoId
}

console.log('Writing JSON file...')
let output = JSON.stringify(papers, null, 2)
fs.writeFileSync('papers.json', output)
