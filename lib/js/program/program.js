
const fs = require('fs')

let str = fs.readFileSync('papers.json', 'utf8')
let papers = JSON.parse(str)

let str2 = fs.readFileSync('sessions.json', 'utf8')
let sessions = JSON.parse(str2)

let json = {
  sessions: sessions,
  papers: papers
}
console.log('Writing JSON file...')
let output = JSON.stringify(json, null, 2)
fs.writeFileSync('program.json', output)
