
const fs = require('fs')
const _ = require('lodash')
const Converter = require('csvtojson').Converter
const converter = new Converter({})


let papers = {}

function getPapers(items) {

  for (let i=0; i<items.length; i++) {
    let item = items[i]
    if (item['ID'].includes('keynote')) continue

    let id = item['ID']
    let title = item['Title']
    let type = item['Type']
    let authors = getAuthors(item)
    let abstract = item['Description']
    let paper = {
      id: id,
      title: title,
      type: type,
      authors: authors,
      abstract: abstract
    }
    papers[id] = paper
  }
  return papers
}

function getAuthors(item) {
  let authors = []
  for (let j=1; j<30; j++) {
    let authorId = item[`Author ID ${j}`]
    if (authorId === '') {
      break
    }
    let nameArray = [
      item[`Author given name or first name ${j}`],
      item[`Middle initial or name ${j}`],
      item[`Author last name or family name ${j}`]
    ]
    let affiliationArray = [
      item[`Primary Affiliation (no labs or dept names in this field) ${j} - Department/School/Lab`],
      item[`Primary Affiliation (no labs or dept names in this field) ${j} - Institution`]
    ]
    let locationArray = [
      item[`Primary Affiliation (no labs or dept names in this field) ${j} - City`],
      item[`Primary Affiliation (no labs or dept names in this field) ${j} - State or Province`],
      item[`Primary Affiliation (no labs or dept names in this field) ${j} - Country`]
    ]
    let name = _.compact(nameArray).join(' ')
    let email = item[`Valid email address ${j}`]
    let affiliation = _.compact(affiliationArray).join(' ')
    let location = _.compact(locationArray).join(' ')
    let author = {
      id: authorId,
      name: name,
      email: email,
      affiliation: affiliation,
      location: location
    }
    authors.push(author)
  }
  return authors
}

converter.fromFile('./papers.csv', (err, items) => {
  getPapers(items)
  console.log('Writing JSON file...')
  let output = JSON.stringify(papers, null, 2)
  fs.writeFileSync('papers.json', output)
})


