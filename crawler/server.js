var express = require('express'); 
var app = express();
var Crawler = require("js-crawler");

app.get('/', function (req, res) {
  res.send('Hello World!')
})

app.listen(8000, function () {
  console.log('magic happening  on port 8000!')
})

 
new Crawler().configure({depth: 1})
  .crawl("http://www.twitter.com/adetona", function onSuccess(page) {
    console.log(page.url);
 });
 