<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HeroStack</title>
</head>
<body>
  <h1 id="herostack-mean-stack-on-steroids">HeroStack {MEAN Stack on Steroids}</h1>

<p><img style="float:left" src="https://raw.githubusercontent.com/nishantmendiratta/herostack/master/logos/angular.ico" alt="Angular" title=""> <br>
<img  style="float:left" src="https://raw.githubusercontent.com/nishantmendiratta/herostack/master/logos/node.png" alt="Node" title=""> <br>
<img  style="float:left" src="https://raw.githubusercontent.com/nishantmendiratta/herostack/master/logos/yuoman.png" alt="Yeoman" title=""> <br>
<img  style="float:left" src="https://raw.githubusercontent.com/nishantmendiratta/herostack/master/logos/bower.png" alt="Bower" title=""> <br>
<img  style="float:left" src="https://raw.githubusercontent.com/nishantmendiratta/herostack/master/logos/grunt.png" alt="Grunt" title=""></p>

<div style="clear:both"></div>

<h3 id="basic-useful-feature-list">Basic useful feature list:</h3>

<ul>
<li>Full-Stack AngularJS + Node.js/Express Seed</li>
<li>Angular, AngularUI, Barbeque, Bootstrap, Bower, Browserify, Docker, Express, Font Awesome, Grunt, EJS, jQuery, JSHint, Karma/Mocha, LESS/LESSHat, Livereload, Lodash/Underscore</li>
</ul>

<table>
<thead>
<tr>
  <th>Dependency</th>
  <th>Installation</th>
</tr>
</thead>
<tbody><tr>
  <td>Yeoman - Great scaffolder. saves TONS of time.</td>
  <td>npm install -g yo</td>
</tr>
<tr>
  <td>Generator-Angular</td>
  <td>npm install -g generator-angular</td>
</tr>
<tr>
  <td>Express</td>
  <td>npm install -g express</td>
</tr>
<tr>
  <td>Nodemon (obviously)</td>
  <td>npm install -g nodemon</td>
</tr>
<tr>
  <td>Bower</td>
  <td>npm install -g bower</td>
</tr>
</tbody></table>




<h3 id="folder-structure">Folder Structure</h3>

<p>This project contains 2 folders Client and Server.</p>



<h3 id="workflow-how-to-setup-angular-node-project">Workflow (How To Setup Angular + Node Project)</h3>

<p>Get inside of your client folder, What it looks like on the command line:</p>



<pre class="prettyprint"><code class=" hljs php"><span class="hljs-variable">$cd</span> yourhome/herostack/client/<span class="hljs-keyword">public</span>
<span class="hljs-variable">$grunt</span> watch</code></pre>

<p>Now open a new tab in terminal and move to server folder and use following commands.</p>



<pre class="prettyprint"><code class=" hljs bash"><span class="hljs-variable">$cd</span> yourhome/herostack/server
<span class="hljs-variable">$nodemon</span> app.js</code></pre>

<p>Now open browser and use <a href="http://localhost:3000">http://localhost:3000</a> to access you site.</p>

<p><sub><sup><em>Twitter - <a href="http://www.twitter.com/mrmendiratta">@MrMendiratta</a> · Inspired by <a href="http://start.jcolemorrison.com/how-i-setup-angular-node-projects/">jcolemorrison blog post</a></em></sup></sub></p>
</body>
</html>