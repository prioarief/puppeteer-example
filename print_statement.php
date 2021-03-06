<?php
	require ("../include/config.php");

	if(array_key_exists("transferExcel",$_GET)){
		header ("Content-Type: application/vnd.ms-excel"); 
		header ("Expires: 0"); 
		header ("Cache-Control : must-revalidate, post-check=0, pre-check=0"); 
	}
	
	error_reporting(0);
?>

<style type ="text/css">
 /*!
 * Bootstrap v3.0.3
 *
 * Copyright 2013 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */

/*! normalize.css v2.1.3 | MIT License | git.io/normalize */
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
video {
  display: inline-block;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
body {
  margin: 0;
}
a {
  background: transparent;
}
a:focus {
  outline: thin dotted;
}
a:active,
a:hover {
  outline: 0;
}
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
}
mark {
  background: #ff0;
  color: #000;
}
code,
kbd,
pre,
samp {
  font-family: monospace, serif;
  font-size: 1em;
}
pre {
  white-space: pre-wrap;
}
q {
  quotes: "\201C" "\201D" "\2018" "\2019";
}
small {
  font-size: 80%;
}
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 0;
}
fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
legend {
  border: 0;
  padding: 0;
}
button,
input,
select,
textarea {
  font-family: inherit;
  font-size: 100%;
  margin: 0;
}
button,
input {
  line-height: normal;
}
button,
select {
  text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}
input[type="search"] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
textarea {
  overflow: auto;
  vertical-align: top;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  
}
@media print {
  * {
    text-shadow: none !important;
    color: #000 !important;
    background: transparent !important;
    box-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  a[href^="javascript:"]:after,
  a[href^="#"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  @page  {
    margin: 1cm .1cm;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  select {
    background: #fff !important;
  }
  .navbar {
    display: none;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html {
  font-size: 62.5%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 10px;
  line-height: 1.6;
  color: #333333;
  background-color: #ffffff;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
a {
  color: #428bca;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #2a6496;
  text-decoration: underline;
}
a:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
img {
  vertical-align: middle;
}
.img-responsive {
  display: block;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: 6px;
}
.img-thumbnail {
  padding: 4px;
  line-height: 1.428571429;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-radius: 4px;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  max-width: 100%;
  height: auto;
}
.img-circle {
  border-radius: 50%;
}
hr {
  margin-top: 14px;
  margin-bottom: 14px;
  border: 0;
  border-top: 1px solid #eeeeee;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 500;
  color: inherit;

}


h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #999999;
}
h1,
h2,
h3 {
  margin-top: 3px;
  margin-bottom: 3px;
}
h1 small,
h2 small,
h3 small,
h1 .small,
h2 .small,
h3 .small {
  font-size: 60%;
}
h4,
h5,
h6 {
  margin-top: 1px;
  margin-bottom: 1px;
  
}
h4 small,
h5 small,
h6 small,
h4 .small,
h5 .small,
h6 .small {
  font-size: 90%;
}
h1,
.h1 {
  font-size: 26px;
}
h2,
.h2 {
  font-size: 21px;
}
h3,
.h3 {
  font-size: 17px;
}
h4,
.h4 {
  font-size: 12px;
}
h5,
.h5 {
  font-size: 10px;
}
h6,
.h6 {
  font-size: 9px;
}
p {
  margin: 0 0 7px;
}
.lead {
  margin-bottom: 14px;
  font-size: 11px;
  font-weight: 200;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .lead {
    font-size: 15px;
  }
}
small,
.small {
  font-size: 85%;
}
cite {
  font-style: normal;
}
.text-muted {
  color: #999999;
}
.text-primary {
  color: #428bca;
}
.text-primary:hover {
  color: #3071a9;
}
.text-warning {
  color: #8a6d3b;
}
.text-warning:hover {
  color: #66512c;
}
.text-danger {
  color: #a94442;
}
.text-danger:hover {
  color: #843534;
}
.text-success {
  color: #3c763d;
}
.text-success:hover {
  color: #2b542c;
}
.text-info {
  color: #31708f;
}
.text-info:hover {
  color: #245269;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.page-header {
  padding-bottom: 6px;
  margin: 28px 0 14px;
  border-bottom: 1px solid #eeeeee;
}
ul,
ol {
  margin-top: 0;
  margin-bottom: 7px;
}
ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  list-style: none;
}
.list-inline > li {
  display: inline-block;
  padding-left: 5px;
  padding-right: 5px;
}
.list-inline > li:first-child {
  padding-left: 0;
}
dl {
  margin-top: 0;
  margin-bottom: 14px;
}
dt,
dd {
  line-height: 1.428571429;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0;
}
@media (min-width: 768px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    clear: left;
    text-align: right;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
  .dl-horizontal dd:before,
  .dl-horizontal dd:after {
    content: " ";
    display: table;
  }
  .dl-horizontal dd:after {
    clear: both;
  }
  .dl-horizontal dd:before,
  .dl-horizontal dd:after {
    content: " ";
    display: table;
  }
  .dl-horizontal dd:after {
    clear: both;
  }
}
abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #999999;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 7px 14px;
  margin: 0 0 14px;
  border-left: 5px solid #eeeeee;
}
blockquote p {
  font-size: 12.5px;
  font-weight: 300;
  line-height: 1.25;
}
blockquote p:last-child {
  margin-bottom: 0;
}
blockquote small,
blockquote .small {
  display: block;
  line-height: 1.428571429;
  color: #999999;
}
blockquote small:before,
blockquote .small:before {
  content: '\2014 \00A0';
}
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid #eeeeee;
  border-left: 0;
}
blockquote.pull-right p,
blockquote.pull-right small,
blockquote.pull-right .small {
  text-align: right;
}
blockquote.pull-right small:before,
blockquote.pull-right .small:before {
  content: '';
}
blockquote.pull-right small:after,
blockquote.pull-right .small:after {
  content: '\00A0 \2014';
}
blockquote:before,
blockquote:after {
  content: "";
}
address {
  margin-bottom: 14px;
  font-style: normal;
  line-height: 1.428571429;
}
code,
kbd,
pre,
samp {
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  white-space: nowrap;
  border-radius: 4px;
}
pre {
  display: block;
  padding: 6.5px;
  margin: 0 0 7px;
  font-size: 9px;
  line-height: 1.428571429;
  word-break: break-all;
  word-wrap: break-word;
  color: #333333;
  background-color: #f5f5f5;
  border: 1px solid #cccccc;
  border-radius: 4px;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.container:before,
.container:after {
  content: " ";
  display: table;
}
.container:after {
  clear: both;
}
.container:before,
.container:after {
  content: " ";
  display: table;
}
.container:after {
  clear: both;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
.row {
  margin-left: -15px;
  margin-right: -15px;
}
.row:before,
.row:after {
  content: " ";
  display: table;
}
.row:after {
  clear: both;
}
.row:before,
.row:after {
  content: " ";
  display: table;
}
.row:after {
  clear: both;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666666666666%;
}
.col-xs-10 {
  width: 83.33333333333334%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666666666666%;
}
.col-xs-7 {
  width: 58.333333333333336%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666666666667%;
}
.col-xs-4 {
  width: 33.33333333333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.666666666666664%;
}
.col-xs-1 {
  width: 8.333333333333332%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666666666666%;
}
.col-xs-pull-10 {
  right: 83.33333333333334%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666666666666%;
}
.col-xs-pull-7 {
  right: 58.333333333333336%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666666666667%;
}
.col-xs-pull-4 {
  right: 33.33333333333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.666666666666664%;
}
.col-xs-pull-1 {
  right: 8.333333333333332%;
}
.col-xs-pull-0 {
  right: 0%;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666666666666%;
}
.col-xs-push-10 {
  left: 83.33333333333334%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666666666666%;
}
.col-xs-push-7 {
  left: 58.333333333333336%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666666666667%;
}
.col-xs-push-4 {
  left: 33.33333333333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.666666666666664%;
}
.col-xs-push-1 {
  left: 8.333333333333332%;
}
.col-xs-push-0 {
  left: 0%;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666666666666%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333333334%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666666666666%;
}
.col-xs-offset-7 {
  margin-left: 58.333333333333336%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666666666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.666666666666664%;
}
.col-xs-offset-1 {
  margin-left: 8.333333333333332%;
}
.col-xs-offset-0 {
  margin-left: 0%;
}
@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666666666666%;
  }
  .col-sm-10 {
    width: 83.33333333333334%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666666666666%;
  }
  .col-sm-7 {
    width: 58.333333333333336%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666666666667%;
  }
  .col-sm-4 {
    width: 33.33333333333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.666666666666664%;
  }
  .col-sm-1 {
    width: 8.333333333333332%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666666666666%;
  }
  .col-sm-pull-10 {
    right: 83.33333333333334%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666666666666%;
  }
  .col-sm-pull-7 {
    right: 58.333333333333336%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666666666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.666666666666664%;
  }
  .col-sm-pull-1 {
    right: 8.333333333333332%;
  }
  .col-sm-pull-0 {
    right: 0%;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666666666666%;
  }
  .col-sm-push-10 {
    left: 83.33333333333334%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666666666666%;
  }
  .col-sm-push-7 {
    left: 58.333333333333336%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666666666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.666666666666664%;
  }
  .col-sm-push-1 {
    left: 8.333333333333332%;
  }
  .col-sm-push-0 {
    left: 0%;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666666666666%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333333334%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666666666666%;
  }
  .col-sm-offset-7 {
    margin-left: 58.333333333333336%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666666666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.666666666666664%;
  }
  .col-sm-offset-1 {
    margin-left: 8.333333333333332%;
  }
  .col-sm-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666666666666%;
  }
  .col-md-10 {
    width: 83.33333333333334%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666666666666%;
  }
  .col-md-7 {
    width: 58.333333333333336%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666666666667%;
  }
  .col-md-4 {
    width: 33.33333333333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.666666666666664%;
  }
  .col-md-1 {
    width: 8.333333333333332%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666666666666%;
  }
  .col-md-pull-10 {
    right: 83.33333333333334%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666666666666%;
  }
  .col-md-pull-7 {
    right: 58.333333333333336%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666666666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.666666666666664%;
  }
  .col-md-pull-1 {
    right: 8.333333333333332%;
  }
  .col-md-pull-0 {
    right: 0%;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666666666666%;
  }
  .col-md-push-10 {
    left: 83.33333333333334%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666666666666%;
  }
  .col-md-push-7 {
    left: 58.333333333333336%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666666666667%;
  }
  .col-md-push-4 {
    left: 33.33333333333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.666666666666664%;
  }
  .col-md-push-1 {
    left: 8.333333333333332%;
  }
  .col-md-push-0 {
    left: 0%;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666666666666%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333333334%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666666666666%;
  }
  .col-md-offset-7 {
    margin-left: 58.333333333333336%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666666666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.666666666666664%;
  }
  .col-md-offset-1 {
    margin-left: 8.333333333333332%;
  }
  .col-md-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666666666666%;
  }
  .col-lg-10 {
    width: 83.33333333333334%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666666666666%;
  }
  .col-lg-7 {
    width: 58.333333333333336%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666666666667%;
  }
  .col-lg-4 {
    width: 33.33333333333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.666666666666664%;
  }
  .col-lg-1 {
    width: 8.333333333333332%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666666666666%;
  }
  .col-lg-pull-10 {
    right: 83.33333333333334%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666666666666%;
  }
  .col-lg-pull-7 {
    right: 58.333333333333336%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666666666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.666666666666664%;
  }
  .col-lg-pull-1 {
    right: 8.333333333333332%;
  }
  .col-lg-pull-0 {
    right: 0%;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666666666666%;
  }
  .col-lg-push-10 {
    left: 83.33333333333334%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666666666666%;
  }
  .col-lg-push-7 {
    left: 58.333333333333336%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666666666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.666666666666664%;
  }
  .col-lg-push-1 {
    left: 8.333333333333332%;
  }
  .col-lg-push-0 {
    left: 0%;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666666666666%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333333334%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666666666666%;
  }
  .col-lg-offset-7 {
    margin-left: 58.333333333333336%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666666666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.666666666666664%;
  }
  .col-lg-offset-1 {
    margin-left: 8.333333333333332%;
  }
  .col-lg-offset-0 {
    margin-left: 0%;
  }
}
table {
  max-width: 100%;
  background-color: transparent;
  
}
th {
  text-align: left;
}

.table2 {
  width: 100%;
  margin-bottom: 10px;
}

.table2 > thead > tr > th,
.table2 > tbody > tr > th,
.table2 > tfoot > tr > th,
.table2 > thead > tr > td,
.table2 > tbody > tr > td,
.table2 > tfoot > tr > td {
  padding: 0px;
  line-height:0.8;
  vertical-align: top;
  border-bottom: 1px solid #CCCCCC;
}

.table2 > thead > tr > th {
  vertical-align: bottom;

}


.table3 {
  width: 100%;
  margin-bottom: 10px;
}

.table3 > thead > tr > th,
.table3 > tbody > tr > th,
.table3 > tfoot > tr > th,
.table3 > thead > tr > td,
.table3 > tbody > tr > td,
.table3 > tfoot > tr > td {
  padding: 0px;
  line-height:0.8;
  vertical-align: top;
}

.table2 > thead > tr > th {
  vertical-align: bottom;

}

.table {
  width: 100%;
  margin-bottom: 14px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 1px;
  line-height: 1.428571429;
  vertical-align: top;
  border-top: 1px solid #dddddd;
}

.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #dddddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #dddddd;
}
.table .table {
  background-color: #ffffff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #dddddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #dddddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  float: none;
  display: table-column;
}
table td[class*="col-"],
table th[class*="col-"] {
  float: none;
  display: table-cell;
}
.table > thead > tr > .active,
.table > tbody > tr > .active,
.table > tfoot > tr > .active,
.table > thead > .active > td,
.table > tbody > .active > td,
.table > tfoot > .active > td,
.table > thead > .active > th,
.table > tbody > .active > th,
.table > tfoot > .active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > .active:hover,
.table-hover > tbody > .active:hover > td,
.table-hover > tbody > .active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > .success,
.table > tbody > tr > .success,
.table > tfoot > tr > .success,
.table > thead > .success > td,
.table > tbody > .success > td,
.table > tfoot > .success > td,
.table > thead > .success > th,
.table > tbody > .success > th,
.table > tfoot > .success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > .success:hover,
.table-hover > tbody > .success:hover > td,
.table-hover > tbody > .success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > .danger,
.table > tbody > tr > .danger,
.table > tfoot > tr > .danger,
.table > thead > .danger > td,
.table > tbody > .danger > td,
.table > tfoot > .danger > td,
.table > thead > .danger > th,
.table > tbody > .danger > th,
.table > tfoot > .danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > .danger:hover,
.table-hover > tbody > .danger:hover > td,
.table-hover > tbody > .danger:hover > th {
  background-color: #ebcccc;
}
.table > thead > tr > .warning,
.table > tbody > tr > .warning,
.table > tfoot > tr > .warning,
.table > thead > .warning > td,
.table > tbody > .warning > td,
.table > tfoot > .warning > td,
.table > thead > .warning > th,
.table > tbody > .warning > th,
.table > tfoot > .warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > .warning:hover,
.table-hover > tbody > .warning:hover > td,
.table-hover > tbody > .warning:hover > th {
  background-color: #faf2cc;
}
@media (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 10.5px;
    overflow-y: hidden;
    overflow-x: scroll;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #dddddd;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
fieldset {
  padding: 0;
  margin: 0;
  border: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 14px;
  font-size: 15px;
  line-height: inherit;
  color: #333333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
label {
  display: inline-block;
  margin-bottom: 5px;
  font-weight: bold;
}
input[type="search"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  /* IE8-9 */

  line-height: normal;
}
input[type="file"] {
  display: block;
}
select[multiple],
select[size] {
  height: auto;
}
select optgroup {
  font-size: inherit;
  font-style: inherit;
  font-family: inherit;
}
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
  height: auto;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 10px;
  line-height: 1.428571429;
  color: #555555;
  vertical-align: middle;
}
.form-control {
  display: block;
  width: 100%;
  height: 28px;
  padding: 6px 12px;
  font-size: 10px;
  line-height: 1.428571429;
  color: #555555;
  vertical-align: middle;
  background-color: #ffffff;
  background-image: none;
  border: 1px solid #cccccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.form-control:-moz-placeholder {
  color: #999999;
}
.form-control::-moz-placeholder {
  color: #999999;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #999999;
}
.form-control::-webkit-input-placeholder {
  color: #999999;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  cursor: not-allowed;
  background-color: #eeeeee;
}
textarea.form-control {
  height: auto;
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  display: block;
  min-height: 14px;
  margin-top: 10px;
  margin-bottom: 10px;
  padding-left: 20px;
  vertical-align: middle;
}
.radio label,
.checkbox label {
  display: inline;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  float: left;
  margin-left: -20px;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
.radio[disabled],
.radio-inline[disabled],
.checkbox[disabled],
.checkbox-inline[disabled],
fieldset[disabled] input[type="radio"],
fieldset[disabled] input[type="checkbox"],
fieldset[disabled] .radio,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.input-sm {
  height: 25px;
  padding: 5px 10px;
  font-size: 9px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-sm {
  height: 25px;
  line-height: 25px;
}
textarea.input-sm {
  height: auto;
}
.input-lg {
  height: 40px;
  padding: 10px 16px;
  font-size: 13px;
  line-height: 1.33;
  border-radius: 6px;
}
select.input-lg {
  height: 40px;
  line-height: 40px;
}
textarea.input-lg {
  height: auto;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline {
  color: #8a6d3b;
}
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
}
.has-warning .input-group-addon {
  color: #8a6d3b;
  border-color: #8a6d3b;
  background-color: #fcf8e3;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline {
  color: #a94442;
}
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
}
.has-error .input-group-addon {
  color: #a94442;
  border-color: #a94442;
  background-color: #f2dede;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline {
  color: #3c763d;
}
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
}
.has-success .input-group-addon {
  color: #3c763d;
  border-color: #3c763d;
  background-color: #dff0d8;
}
.form-control-static {
  margin-bottom: 0;
}
.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #737373;
}
@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
  }
  .form-inline select.form-control {
    width: auto;
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    padding-left: 0;
  }
  .form-inline .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"] {
    float: none;
    margin-left: 0;
  }
}
.form-horizontal .control-label,
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 21px;
}
.form-horizontal .form-group {
  margin-left: -15px;
  margin-right: -15px;
}
.form-horizontal .form-group:before,
.form-horizontal .form-group:after {
  content: " ";
  display: table;
}
.form-horizontal .form-group:after {
  clear: both;
}
.form-horizontal .form-group:before,
.form-horizontal .form-group:after {
  content: " ";
  display: table;
}
.form-horizontal .form-group:after {
  clear: both;
}
.form-horizontal .form-control-static {
  padding-top: 7px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    text-align: right;
  }
}
.btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: normal;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 6px 12px;
  font-size: 10px;
  line-height: 1.428571429;
  border-radius: 4px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
.btn:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus {
  color: #333333;
  text-decoration: none;
}
.btn:active,
.btn.active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  pointer-events: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn-default {
  color: #333333;
  background-color: #ffffff;
  border-color: #cccccc;
}
.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active,
.open .dropdown-toggle.btn-default {
  color: #333333;
  background-color: #ebebeb;
  border-color: #adadad;
}
.btn-default:active,
.btn-default.active,
.open .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled,
.btn-default[disabled],
fieldset[disabled] .btn-default,
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled:active,
.btn-default[disabled]:active,
fieldset[disabled] .btn-default:active,
.btn-default.disabled.active,
.btn-default[disabled].active,
fieldset[disabled] .btn-default.active {
  background-color: #ffffff;
  border-color: #cccccc;
}
.btn-default .badge {
  color: #ffffff;
  background-color: #fff;
}
.btn-primary {
  color: #ffffff;
  background-color: #428bca;
  border-color: #357ebd;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.open .dropdown-toggle.btn-primary {
  color: #ffffff;
  background-color: #3276b1;
  border-color: #285e8e;
}
.btn-primary:active,
.btn-primary.active,
.open .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled,
.btn-primary[disabled],
fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary.active {
  background-color: #428bca;
  border-color: #357ebd;
}
.btn-primary .badge {
  color: #428bca;
  background-color: #fff;
}
.btn-warning {
  color: #ffffff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active,
.open .dropdown-toggle.btn-warning {
  color: #ffffff;
  background-color: #ed9c28;
  border-color: #d58512;
}
.btn-warning:active,
.btn-warning.active,
.open .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled,
.btn-warning[disabled],
fieldset[disabled] .btn-warning,
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled:active,
.btn-warning[disabled]:active,
fieldset[disabled] .btn-warning:active,
.btn-warning.disabled.active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning.active {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.btn-danger {
  color: #ffffff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.open .dropdown-toggle.btn-danger {
  color: #ffffff;
  background-color: #d2322d;
  border-color: #ac2925;
}
.btn-danger:active,
.btn-danger.active,
.open .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled,
.btn-danger[disabled],
fieldset[disabled] .btn-danger,
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled:active,
.btn-danger[disabled]:active,
fieldset[disabled] .btn-danger:active,
.btn-danger.disabled.active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger.active {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger .badge {
  color: #d9534f;
  background-color: #fff;
}
.btn-success {
  color: #ffffff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  color: #ffffff;
  background-color: #47a447;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled,
.btn-success[disabled],
fieldset[disabled] .btn-success,
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled:active,
.btn-success[disabled]:active,
fieldset[disabled] .btn-success:active,
.btn-success.disabled.active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success.active {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.btn-info {
  color: #ffffff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active,
.open .dropdown-toggle.btn-info {
  color: #ffffff;
  background-color: #39b3d7;
  border-color: #269abc;
}
.btn-info:active,
.btn-info.active,
.open .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled,
.btn-info[disabled],
fieldset[disabled] .btn-info,
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled:active,
.btn-info[disabled]:active,
fieldset[disabled] .btn-info:active,
.btn-info.disabled.active,
.btn-info[disabled].active,
fieldset[disabled] .btn-info.active {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.btn-link {
  color: #428bca;
  font-weight: normal;
  cursor: pointer;
  border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #2a6496;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #999999;
  text-decoration: none;
}
.btn-lg {
  padding: 10px 16px;
  font-size: 13px;
  line-height: 1.33;
  border-radius: 6px;
}
.btn-sm {
  padding: 5px 10px;
  font-size: 9px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-xs {
  padding: 1px 5px;
  font-size: 9px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  transition: height 0.35s ease;
}
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('../fonts/glyphicons-halflings-regular.eot');
  src: url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../fonts/glyphicons-halflings-regular.woff') format('woff'), url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../fonts/glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg');
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon:empty {
  width: 1em;
}
.glyphicon-asterisk:before {
  content: "\2a";
}
.glyphicon-plus:before {
  content: "\2b";
}
.glyphicon-euro:before {
  content: "\20ac";
}
.glyphicon-minus:before {
  content: "\2212";
}
.glyphicon-cloud:before {
  content: "\2601";
}
.glyphicon-envelope:before {
  content: "\2709";
}
.glyphicon-pencil:before {
  content: "\270f";
}
.glyphicon-glass:before {
  content: "\e001";
}
.glyphicon-music:before {
  content: "\e002";
}
.glyphicon-search:before {
  content: "\e003";
}
.glyphicon-heart:before {
  content: "\e005";
}
.glyphicon-star:before {
  content: "\e006";
}
.glyphicon-star-empty:before {
  content: "\e007";
}
.glyphicon-user:before {
  content: "\e008";
}
.glyphicon-film:before {
  content: "\e009";
}
.glyphicon-th-large:before {
  content: "\e010";
}
.glyphicon-th:before {
  content: "\e011";
}
.glyphicon-th-list:before {
  content: "\e012";
}
.glyphicon-ok:before {
  content: "\e013";
}
.glyphicon-remove:before {
  content: "\e014";
}
.glyphicon-zoom-in:before {
  content: "\e015";
}
.glyphicon-zoom-out:before {
  content: "\e016";
}
.glyphicon-off:before {
  content: "\e017";
}
.glyphicon-signal:before {
  content: "\e018";
}
.glyphicon-cog:before {
  content: "\e019";
}
.glyphicon-trash:before {
  content: "\e020";
}
.glyphicon-home:before {
  content: "\e021";
}
.glyphicon-file:before {
  content: "\e022";
}
.glyphicon-time:before {
  content: "\e023";
}
.glyphicon-road:before {
  content: "\e024";
}
.glyphicon-download-alt:before {
  content: "\e025";
}
.glyphicon-download:before {
  content: "\e026";
}
.glyphicon-upload:before {
  content: "\e027";
}
.glyphicon-inbox:before {
  content: "\e028";
}
.glyphicon-play-circle:before {
  content: "\e029";
}
.glyphicon-repeat:before {
  content: "\e030";
}
.glyphicon-refresh:before {
  content: "\e031";
}
.glyphicon-list-alt:before {
  content: "\e032";
}
.glyphicon-lock:before {
  content: "\e033";
}
.glyphicon-flag:before {
  content: "\e034";
}
.glyphicon-headphones:before {
  content: "\e035";
}
.glyphicon-volume-off:before {
  content: "\e036";
}
.glyphicon-volume-down:before {
  content: "\e037";
}
.glyphicon-volume-up:before {
  content: "\e038";
}
.glyphicon-qrcode:before {
  content: "\e039";
}
.glyphicon-barcode:before {
  content: "\e040";
}
.glyphicon-tag:before {
  content: "\e041";
}
.glyphicon-tags:before {
  content: "\e042";
}
.glyphicon-book:before {
  content: "\e043";
}
.glyphicon-bookmark:before {
  content: "\e044";
}
.glyphicon-print:before {
  content: "\e045";
}
.glyphicon-camera:before {
  content: "\e046";
}
.glyphicon-font:before {
  content: "\e047";
}
.glyphicon-bold:before {
  content: "\e048";
}
.glyphicon-italic:before {
  content: "\e049";
}
.glyphicon-text-height:before {
  content: "\e050";
}
.glyphicon-text-width:before {
  content: "\e051";
}
.glyphicon-align-left:before {
  content: "\e052";
}
.glyphicon-align-center:before {
  content: "\e053";
}
.glyphicon-align-right:before {
  content: "\e054";
}
.glyphicon-align-justify:before {
  content: "\e055";
}
.glyphicon-list:before {
  content: "\e056";
}
.glyphicon-indent-left:before {
  content: "\e057";
}
.glyphicon-indent-right:before {
  content: "\e058";
}
.glyphicon-facetime-video:before {
  content: "\e059";
}
.glyphicon-picture:before {
  content: "\e060";
}
.glyphicon-map-marker:before {
  content: "\e062";
}
.glyphicon-adjust:before {
  content: "\e063";
}
.glyphicon-tint:before {
  content: "\e064";
}
.glyphicon-edit:before {
  content: "\e065";
}
.glyphicon-share:before {
  content: "\e066";
}
.glyphicon-check:before {
  content: "\e067";
}
.glyphicon-move:before {
  content: "\e068";
}
.glyphicon-step-backward:before {
  content: "\e069";
}
.glyphicon-fast-backward:before {
  content: "\e070";
}
.glyphicon-backward:before {
  content: "\e071";
}
.glyphicon-play:before {
  content: "\e072";
}
.glyphicon-pause:before {
  content: "\e073";
}
.glyphicon-stop:before {
  content: "\e074";
}
.glyphicon-forward:before {
  content: "\e075";
}
.glyphicon-fast-forward:before {
  content: "\e076";
}
.glyphicon-step-forward:before {
  content: "\e077";
}
.glyphicon-eject:before {
  content: "\e078";
}
.glyphicon-chevron-left:before {
  content: "\e079";
}
.glyphicon-chevron-right:before {
  content: "\e080";
}
.glyphicon-plus-sign:before {
  content: "\e081";
}
.glyphicon-minus-sign:before {
  content: "\e082";
}
.glyphicon-remove-sign:before {
  content: "\e083";
}
.glyphicon-ok-sign:before {
  content: "\e084";
}
.glyphicon-question-sign:before {
  content: "\e085";
}
.glyphicon-info-sign:before {
  content: "\e086";
}
.glyphicon-screenshot:before {
  content: "\e087";
}
.glyphicon-remove-circle:before {
  content: "\e088";
}
.glyphicon-ok-circle:before {
  content: "\e089";
}
.glyphicon-ban-circle:before {
  content: "\e090";
}
.glyphicon-arrow-left:before {
  content: "\e091";
}
.glyphicon-arrow-right:before {
  content: "\e092";
}
.glyphicon-arrow-up:before {
  content: "\e093";
}
.glyphicon-arrow-down:before {
  content: "\e094";
}
.glyphicon-share-alt:before {
  content: "\e095";
}
.glyphicon-resize-full:before {
  content: "\e096";
}
.glyphicon-resize-small:before {
  content: "\e097";
}
.glyphicon-exclamation-sign:before {
  content: "\e101";
}
.glyphicon-gift:before {
  content: "\e102";
}
.glyphicon-leaf:before {
  content: "\e103";
}
.glyphicon-fire:before {
  content: "\e104";
}
.glyphicon-eye-open:before {
  content: "\e105";
}
.glyphicon-eye-close:before {
  content: "\e106";
}
.glyphicon-warning-sign:before {
  content: "\e107";
}
.glyphicon-plane:before {
  content: "\e108";
}
.glyphicon-calendar:before {
  content: "\e109";
}
.glyphicon-random:before {
  content: "\e110";
}
.glyphicon-comment:before {
  content: "\e111";
}
.glyphicon-magnet:before {
  content: "\e112";
}
.glyphicon-chevron-up:before {
  content: "\e113";
}
.glyphicon-chevron-down:before {
  content: "\e114";
}
.glyphicon-retweet:before {
  content: "\e115";
}
.glyphicon-shopping-cart:before {
  content: "\e116";
}
.glyphicon-folder-close:before {
  content: "\e117";
}
.glyphicon-folder-open:before {
  content: "\e118";
}
.glyphicon-resize-vertical:before {
  content: "\e119";
}
.glyphicon-resize-horizontal:before {
  content: "\e120";
}
.glyphicon-hdd:before {
  content: "\e121";
}
.glyphicon-bullhorn:before {
  content: "\e122";
}
.glyphicon-bell:before {
  content: "\e123";
}
.glyphicon-certificate:before {
  content: "\e124";
}
.glyphicon-thumbs-up:before {
  content: "\e125";
}
.glyphicon-thumbs-down:before {
  content: "\e126";
}
.glyphicon-hand-right:before {
  content: "\e127";
}
.glyphicon-hand-left:before {
  content: "\e128";
}
.glyphicon-hand-up:before {
  content: "\e129";
}
.glyphicon-hand-down:before {
  content: "\e130";
}
.glyphicon-circle-arrow-right:before {
  content: "\e131";
}
.glyphicon-circle-arrow-left:before {
  content: "\e132";
}
.glyphicon-circle-arrow-up:before {
  content: "\e133";
}
.glyphicon-circle-arrow-down:before {
  content: "\e134";
}
.glyphicon-globe:before {
  content: "\e135";
}
.glyphicon-wrench:before {
  content: "\e136";
}
.glyphicon-tasks:before {
  content: "\e137";
}
.glyphicon-filter:before {
  content: "\e138";
}
.glyphicon-briefcase:before {
  content: "\e139";
}
.glyphicon-fullscreen:before {
  content: "\e140";
}
.glyphicon-dashboard:before {
  content: "\e141";
}
.glyphicon-paperclip:before {
  content: "\e142";
}
.glyphicon-heart-empty:before {
  content: "\e143";
}
.glyphicon-link:before {
  content: "\e144";
}
.glyphicon-phone:before {
  content: "\e145";
}
.glyphicon-pushpin:before {
  content: "\e146";
}
.glyphicon-usd:before {
  content: "\e148";
}
.glyphicon-gbp:before {
  content: "\e149";
}
.glyphicon-sort:before {
  content: "\e150";
}
.glyphicon-sort-by-alphabet:before {
  content: "\e151";
}
.glyphicon-sort-by-alphabet-alt:before {
  content: "\e152";
}
.glyphicon-sort-by-order:before {
  content: "\e153";
}
.glyphicon-sort-by-order-alt:before {
  content: "\e154";
}
.glyphicon-sort-by-attributes:before {
  content: "\e155";
}
.glyphicon-sort-by-attributes-alt:before {
  content: "\e156";
}
.glyphicon-unchecked:before {
  content: "\e157";
}
.glyphicon-expand:before {
  content: "\e158";
}
.glyphicon-collapse-down:before {
  content: "\e159";
}
.glyphicon-collapse-up:before {
  content: "\e160";
}
.glyphicon-log-in:before {
  content: "\e161";
}
.glyphicon-flash:before {
  content: "\e162";
}
.glyphicon-log-out:before {
  content: "\e163";
}
.glyphicon-new-window:before {
  content: "\e164";
}
.glyphicon-record:before {
  content: "\e165";
}
.glyphicon-save:before {
  content: "\e166";
}
.glyphicon-open:before {
  content: "\e167";
}
.glyphicon-saved:before {
  content: "\e168";
}
.glyphicon-import:before {
  content: "\e169";
}
.glyphicon-export:before {
  content: "\e170";
}
.glyphicon-send:before {
  content: "\e171";
}
.glyphicon-floppy-disk:before {
  content: "\e172";
}
.glyphicon-floppy-saved:before {
  content: "\e173";
}
.glyphicon-floppy-remove:before {
  content: "\e174";
}
.glyphicon-floppy-save:before {
  content: "\e175";
}
.glyphicon-floppy-open:before {
  content: "\e176";
}
.glyphicon-credit-card:before {
  content: "\e177";
}
.glyphicon-transfer:before {
  content: "\e178";
}
.glyphicon-cutlery:before {
  content: "\e179";
}
.glyphicon-header:before {
  content: "\e180";
}
.glyphicon-compressed:before {
  content: "\e181";
}
.glyphicon-earphone:before {
  content: "\e182";
}
.glyphicon-phone-alt:before {
  content: "\e183";
}
.glyphicon-tower:before {
  content: "\e184";
}
.glyphicon-stats:before {
  content: "\e185";
}
.glyphicon-sd-video:before {
  content: "\e186";
}
.glyphicon-hd-video:before {
  content: "\e187";
}
.glyphicon-subtitles:before {
  content: "\e188";
}
.glyphicon-sound-stereo:before {
  content: "\e189";
}
.glyphicon-sound-dolby:before {
  content: "\e190";
}
.glyphicon-sound-5-1:before {
  content: "\e191";
}
.glyphicon-sound-6-1:before {
  content: "\e192";
}
.glyphicon-sound-7-1:before {
  content: "\e193";
}
.glyphicon-copyright-mark:before {
  content: "\e194";
}
.glyphicon-registration-mark:before {
  content: "\e195";
}
.glyphicon-cloud-download:before {
  content: "\e197";
}
.glyphicon-cloud-upload:before {
  content: "\e198";
}
.glyphicon-tree-conifer:before {
  content: "\e199";
}
.glyphicon-tree-deciduous:before {
  content: "\e200";
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px solid;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.dropdown {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 10px;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 6px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.428571429;
  color: #333333;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #ffffff;
  text-decoration: none;
  outline: 0;
  background-color: #428bca;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #999999;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 9px;
  line-height: 1.428571429;
  color: #999999;
}
.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom: 4px solid;
  content: "";
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 1px;
}
@media (min-width: 768px) {
  .navbar-right .dropdown-menu {
    right: 0;
    left: auto;
  }
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
  z-index: 2;
}
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus {
  outline: none;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar:before,
.btn-toolbar:after {
  content: " ";
  display: table;
}
.btn-toolbar:after {
  clear: both;
}
.btn-toolbar:before,
.btn-toolbar:after {
  content: " ";
  display: table;
}
.btn-toolbar:after {
  clear: both;
}
.btn-toolbar .btn-group {
  float: left;
}
.btn-toolbar > .btn + .btn,
.btn-toolbar > .btn-group + .btn,
.btn-toolbar > .btn + .btn-group,
.btn-toolbar > .btn-group + .btn-group {
  margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child > .btn:last-child,
.btn-group > .btn-group:first-child > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn-group:last-child > .btn:first-child {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 9px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 9px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 13px;
  line-height: 1.33;
  border-radius: 6px;
}
.btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after {
  content: " ";
  display: table;
}
.btn-group-vertical > .btn-group:after {
  clear: both;
}
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after {
  content: " ";
  display: table;
}
.btn-group-vertical > .btn-group:after {
  clear: both;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-bottom-left-radius: 4px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child > .btn:last-child,
.btn-group-vertical > .btn-group:first-child > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:last-child > .btn:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  float: none;
  display: table-cell;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
[data-toggle="buttons"] > .btn > input[type="radio"],
[data-toggle="buttons"] > .btn > input[type="checkbox"] {
  display: none;
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*="col-"] {
  float: none;
  padding-left: 0;
  padding-right: 0;
}
.input-group .form-control {
  width: 100%;
  margin-bottom: 0;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 40px;
  padding: 10px 16px;
  font-size: 13px;
  line-height: 1.33;
  border-radius: 6px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 40px;
  line-height: 40px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 25px;
  padding: 5px 10px;
  font-size: 9px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 25px;
  line-height: 25px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: 6px 12px;
  font-size: 10px;
  font-weight: normal;
  line-height: 1;
  color: #555555;
  text-align: center;
  background-color: #eeeeee;
  border: 1px solid #cccccc;
  border-radius: 4px;
}
.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 9px;
  border-radius: 3px;
}
.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 13px;
  border-radius: 6px;
}
.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  white-space: nowrap;
}
.input-group-btn:first-child > .btn {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn {
  margin-left: -1px;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -4px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:active {
  z-index: 2;
}
.nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.nav:before,
.nav:after {
  content: " ";
  display: table;
}
.nav:after {
  clear: both;
}
.nav:before,
.nav:after {
  content: " ";
  display: table;
}
.nav:after {
  clear: both;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.nav > li.disabled > a {
  color: #999999;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: #999999;
  text-decoration: none;
  background-color: transparent;
  cursor: not-allowed;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: #eeeeee;
  border-color: #428bca;
}
.nav .nav-divider {
  height: 1px;
  margin: 6px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid #dddddd;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.428571429;
  border: 1px solid transparent;
  border-radius: 4px 4px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #dddddd;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: #555555;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-bottom-color: transparent;
  cursor: default;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #dddddd;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #dddddd;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #ffffff;
  }
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 4px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #ffffff;
  background-color: #428bca;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid #dddddd;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid #dddddd;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #ffffff;
  }
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 14px;
  border: 1px solid transparent;
}
.navbar:before,
.navbar:after {
  content: " ";
  display: table;
}
.navbar:after {
  clear: both;
}
.navbar:before,
.navbar:after {
  content: " ";
  display: table;
}
.navbar:after {
  clear: both;
}
@media (min-width: 768px) {
  .navbar {
    border-radius: 4px;
  }
}
.navbar-header:before,
.navbar-header:after {
  content: " ";
  display: table;
}
.navbar-header:after {
  clear: both;
}
.navbar-header:before,
.navbar-header:after {
  content: " ";
  display: table;
}
.navbar-header:after {
  clear: both;
}
@media (min-width: 768px) {
  .navbar-header {
    float: left;
  }
}
.navbar-collapse {
  max-height: 340px;
  overflow-x: visible;
  padding-right: 15px;
  padding-left: 15px;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch;
}
.navbar-collapse:before,
.navbar-collapse:after {
  content: " ";
  display: table;
}
.navbar-collapse:after {
  clear: both;
}
.navbar-collapse:before,
.navbar-collapse:after {
  content: " ";
  display: table;
}
.navbar-collapse:after {
  clear: both;
}
.navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 768px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    padding-left: 0;
    padding-right: 0;
  }
}
.container > .navbar-header,
.container > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .container > .navbar-header,
  .container > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 768px) {
  .navbar-static-top {
    border-radius: 0;
  }
}
.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
@media (min-width: 768px) {
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: 0;
  }
}
.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.navbar-brand {
  float: left;
  padding: 18px 15px;
  font-size: 13px;
  line-height: 14px;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
@media (min-width: 768px) {
  .navbar > .container .navbar-brand {
    margin-left: -15px;
  }
}
.navbar-toggle {
  position: relative;
  float: right;
  margin-right: 15px;
  padding: 9px 10px;
  margin-top: 8px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media (min-width: 768px) {
  .navbar-toggle {
    display: none;
  }
}
.navbar-nav {
  margin: 9px -15px;
}
.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 14px;
}
@media (max-width: 767px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    box-shadow: none;
  }
  .navbar-nav .open .dropdown-menu > li > a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 14px;
  }
  .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media (min-width: 768px) {
  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 18px;
    padding-bottom: 18px;
  }
  .navbar-nav.navbar-right:last-child {
    margin-right: -15px;
  }
}
@media (min-width: 768px) {
  .navbar-left {
    float: left !important;
  }
  .navbar-right {
    float: right !important;
  }
}
.navbar-form {
  margin-left: -15px;
  margin-right: -15px;
  padding: 10px 15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: 11px;
  margin-bottom: 11px;
}
@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
  }
  .navbar-form select.form-control {
    width: auto;
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    padding-left: 0;
  }
  .navbar-form .radio input[type="radio"],
  .navbar-form .checkbox input[type="checkbox"] {
    float: none;
    margin-left: 0;
  }
}
@media (max-width: 767px) {
  .navbar-form .form-group {
    margin-bottom: 5px;
  }
}
@media (min-width: 768px) {
  .navbar-form {
    width: auto;
    border: 0;
    margin-left: 0;
    margin-right: 0;
    padding-top: 0;
    padding-bottom: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  .navbar-form.navbar-right:last-child {
    margin-right: -15px;
  }
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-nav.pull-right > li > .dropdown-menu,
.navbar-nav > li > .dropdown-menu.pull-right {
  left: auto;
  right: 0;
}
.navbar-btn {
  margin-top: 11px;
  margin-bottom: 11px;
}
.navbar-btn.btn-sm {
  margin-top: 12.5px;
  margin-bottom: 12.5px;
}
.navbar-btn.btn-xs {
  margin-top: 14px;
  margin-bottom: 14px;
}
.navbar-text {
  margin-top: 18px;
  margin-bottom: 18px;
}
@media (min-width: 768px) {
  .navbar-text {
    float: left;
    margin-left: 15px;
    margin-right: 15px;
  }
  .navbar-text.navbar-right:last-child {
    margin-right: 0;
  }
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
  color: #777777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: #777777;
}
.navbar-default .navbar-nav > li > a {
  color: #777777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #333333;
  background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #555555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: #cccccc;
  background-color: transparent;
}
.navbar-default .navbar-toggle {
  border-color: #dddddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #dddddd;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #cccccc;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  background-color: #e7e7e7;
  color: #555555;
}
@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777777;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #333333;
    background-color: transparent;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #555555;
    background-color: #e7e7e7;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #cccccc;
    background-color: transparent;
  }
}
.navbar-default .navbar-link {
  color: #777777;
}
.navbar-default .navbar-link:hover {
  color: #333333;
}
.navbar-inverse {
  background-color: #222222;
  border-color: #080808;
}
.navbar-inverse .navbar-brand {
  color: #999999;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #ffffff;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #999999;
}
.navbar-inverse .navbar-nav > li > a {
  color: #999999;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #ffffff;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #ffffff;
  background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444444;
  background-color: transparent;
}
.navbar-inverse .navbar-toggle {
  border-color: #333333;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #333333;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #ffffff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  background-color: #080808;
  color: #ffffff;
}
@media (max-width: 767px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #999999;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ffffff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ffffff;
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444444;
    background-color: transparent;
  }
}
.navbar-inverse .navbar-link {
  color: #999999;
}
.navbar-inverse .navbar-link:hover {
  color: #ffffff;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 14px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 4px;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  content: "/\00a0";
  padding: 0 5px;
  color: #cccccc;
}
.breadcrumb > .active {
  color: #999999;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 14px 0;
  border-radius: 4px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  line-height: 1.428571429;
  text-decoration: none;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  margin-left: -1px;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-bottom-left-radius: 4px;
  border-top-left-radius: 4px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  background-color: #eeeeee;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 2;
  color: #ffffff;
  background-color: #428bca;
  border-color: #428bca;
  cursor: default;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #999999;
  background-color: #ffffff;
  border-color: #dddddd;
  cursor: not-allowed;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 13px;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-bottom-left-radius: 6px;
  border-top-left-radius: 6px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-bottom-right-radius: 6px;
  border-top-right-radius: 6px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 9px;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px;
}
.pager {
  padding-left: 0;
  margin: 14px 0;
  list-style: none;
  text-align: center;
}
.pager:before,
.pager:after {
  content: " ";
  display: table;
}
.pager:after {
  clear: both;
}
.pager:before,
.pager:after {
  content: " ";
  display: table;
}
.pager:after {
  clear: both;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #999999;
  background-color: #ffffff;
  cursor: not-allowed;
}
.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #ffffff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
.label[href]:hover,
.label[href]:focus {
  color: #ffffff;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #999999;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #808080;
}
.label-primary {
  background-color: #428bca;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #3071a9;
}
.label-success {
  background-color: #5cb85c;
}
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #449d44;
}
.label-info {
  background-color: #5bc0de;
}
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #31b0d5;
}
.label-warning {
  background-color: #f0ad4e;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #ec971f;
}
.label-danger {
  background-color: #d9534f;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #c9302c;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 9px;
  font-weight: bold;
  color: #ffffff;
  line-height: 1;
  vertical-align: baseline;
  white-space: nowrap;
  text-align: center;
  background-color: #999999;
  border-radius: 10px;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
a.badge:hover,
a.badge:focus {
  color: #ffffff;
  text-decoration: none;
  cursor: pointer;
}
a.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #428bca;
  background-color: #ffffff;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
.jumbotron {
  padding: 30px;
  margin-bottom: 30px;
  font-size: 15px;
  font-weight: 200;
  line-height: 2.1428571435;
  color: inherit;
  background-color: #eeeeee;
}
.jumbotron h1,
.jumbotron .h1 {
  line-height: 1;
  color: inherit;
}
.jumbotron p {
  line-height: 1.4;
}
.container .jumbotron {
  border-radius: 6px;
}
.jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .jumbotron {
    padding-top: 48px;
    padding-bottom: 48px;
  }
  .container .jumbotron {
    padding-left: 60px;
    padding-right: 60px;
  }
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: 45px;
  }
}
.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 14px;
  line-height: 1.428571429;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-radius: 4px;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
  display: block;
  max-width: 100%;
  height: auto;
  margin-left: auto;
  margin-right: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #428bca;
}
.thumbnail .caption {
  padding: 9px;
  color: #333333;
}
.alert {
  padding: 15px;
  margin-bottom: 14px;
  border: 1px solid transparent;
  border-radius: 4px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable {
  padding-right: 35px;
}
.alert-dismissable .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  background-color: #dff0d8;
  border-color: #d6e9c6;
  color: #3c763d;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  background-color: #d9edf7;
  border-color: #bce8f1;
  color: #31708f;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  background-color: #fcf8e3;
  border-color: #faebcc;
  color: #8a6d3b;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  background-color: #f2dede;
  border-color: #ebccd1;
  color: #a94442;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  overflow: hidden;
  height: 14px;
  margin-bottom: 14px;
  background-color: #f5f5f5;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 9px;
  line-height: 14px;
  color: #ffffff;
  text-align: center;
  background-color: #428bca;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.progress-striped .progress-bar {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 40px 40px;
}
.progress.active .progress-bar {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.media,
.media-body {
  overflow: hidden;
  zoom: 1;
}
.media,
.media .media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media-object {
  display: block;
}
.media-heading {
  margin: 0 0 5px;
}
.media > .pull-left {
  margin-right: 10px;
}
.media > .pull-right {
  margin-left: 10px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
.list-group {
  margin-bottom: 20px;
  padding-left: 0;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #ffffff;
  border: 1px solid #dddddd;
}
.list-group-item:first-child {
  border-top-right-radius: 4px;
  border-top-left-radius: 4px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: 5px;
}
a.list-group-item {
  color: #555555;
}
a.list-group-item .list-group-item-heading {
  color: #333333;
}
a.list-group-item:hover,
a.list-group-item:focus {
  text-decoration: none;
  background-color: #f5f5f5;
}
a.list-group-item.active,
a.list-group-item.active:hover,
a.list-group-item.active:focus {
  z-index: 2;
  color: #ffffff;
  background-color: #428bca;
  border-color: #428bca;
}
a.list-group-item.active .list-group-item-heading,
a.list-group-item.active:hover .list-group-item-heading,
a.list-group-item.active:focus .list-group-item-heading {
  color: inherit;
}
a.list-group-item.active .list-group-item-text,
a.list-group-item.active:hover .list-group-item-text,
a.list-group-item.active:focus .list-group-item-text {
  color: #e1edf7;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: 2px;
  background-color: #ffffff;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.panel-body {
  padding: 15px;
}
.panel-body:before,
.panel-body:after {
  content: " ";
  display: table;
}
.panel-body:after {
  clear: both;
}
.panel-body:before,
.panel-body:after {
  content: " ";
  display: table;
}
.panel-body:after {
  clear: both;
}
.panel > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item {
  border-width: 1px 0;
}
.panel > .list-group .list-group-item:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.panel > .list-group .list-group-item:last-child {
  border-bottom: 0;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table {
  margin-bottom: 0;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive {
  border-top: 1px solid #dddddd;
}
.panel > .table > tbody:first-child th,
.panel > .table > tbody:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:last-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:last-child > th,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-bordered > thead > tr:last-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td {
  border-bottom: 0;
}
.panel > .table-responsive {
  border: 0;
  margin-bottom: 0;
}
.panel-heading {
  padding: 3px 5px;
  border-bottom: 1px solid transparent;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 12px;
  color: inherit;
}
.panel-title > a {
  color: inherit;
}
.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #dddddd;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 4px;
  overflow: hidden;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse .panel-body {
  border-top: 1px solid #dddddd;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #dddddd;
}
.panel-default {
  border-color: #dddddd;
}
.panel-default > .panel-heading {
  color: #333333;
  background-color: #f5f5f5;
  border-color: #dddddd;
}
.panel-default > .panel-heading + .panel-collapse .panel-body {
  border-top-color: #dddddd;
}
.panel-default > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: #dddddd;
}
.panel-primary {
  border-color: #428bca;
}
.panel-primary > .panel-heading {
  color: #ffffff;
  background-color: #428bca;
  border-color: #428bca;
}
.panel-primary > .panel-heading + .panel-collapse .panel-body {
  border-top-color: #428bca;
}
.panel-primary > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: #428bca;
}
.panel-success {
  border-color: #47a447;
}
.panel-success > .panel-heading {
  color: #ffffff;
  background-color: #47a447;
  border-color: #47a447;
}
.panel-success > .panel-heading + .panel-collapse .panel-body {
  border-top-color: #47a447;
}
.panel-success > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: #47a447;
}
.panel-warning {
  border-color: #f0ad4e;
}
.panel-warning > .panel-heading {
  color: #ffffff;
  background-color: #f0ad4e;
  border-color: #f0ad4e;
}
.panel-warning > .panel-heading + .panel-collapse .panel-body {
  border-top-color: #f0ad4e;
}
.panel-warning > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: #f0ad4e;
}
.panel-danger {
  border-color: #ebccd1;
}
.panel-danger > .panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.panel-danger > .panel-heading + .panel-collapse .panel-body {
  border-top-color: #ebccd1;
}
.panel-danger > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: #ebccd1;
}
.panel-info {
  border-color: #bce8f1;
}
.panel-info > .panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.panel-info > .panel-heading + .panel-collapse .panel-body {
  border-top-color: #bce8f1;
}
.panel-info > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: #bce8f1;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.well-lg {
  padding: 24px;
  border-radius: 6px;
}
.well-sm {
  padding: 9px;
  border-radius: 3px;
}
.close {
  float: right;
  font-size: 15px;
  font-weight: bold;
  line-height: 1;
  color: #000000;
  text-shadow: 0 1px 0 #ffffff;
  opacity: 0.2;
  filter: alpha(opacity=20);
}
.close:hover,
.close:focus {
  color: #000000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.5;
  filter: alpha(opacity=50);
}
button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
.modal-open {
  overflow: hidden;
}
.modal {
  display: none;
  overflow: auto;
  overflow-y: scroll;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
}
.modal.fade .modal-dialog {
  -webkit-transform: translate(0, -25%);
  -ms-transform: translate(0, -25%);
  transform: translate(0, -25%);
  -webkit-transition: -webkit-transform 0.3s ease-out;
  -moz-transition: -moz-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  transform: translate(0, 0);
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
  z-index: 1050;
}
.modal-content {
  position: relative;
  background-color: #ffffff;
  border: 1px solid #999999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  background-clip: padding-box;
  outline: none;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
  background-color: #000000;
}
.modal-backdrop.fade {
  opacity: 0;
  filter: alpha(opacity=0);
}
.modal-backdrop.in {
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
  min-height: 16.428571429px;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.428571429;
}
.modal-body {
  position: relative;
  padding: 20px;
}
.modal-footer {
  margin-top: 15px;
  padding: 19px 20px 20px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer:before,
.modal-footer:after {
  content: " ";
  display: table;
}
.modal-footer:after {
  clear: both;
}
.modal-footer:before,
.modal-footer:after {
  content: " ";
  display: table;
}
.modal-footer:after {
  clear: both;
}
.modal-footer .btn + .btn {
  margin-left: 5px;
  margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
@media screen and (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }
}
.tooltip {
  position: absolute;
  z-index: 1030;
  display: block;
  visibility: visible;
  font-size: 9px;
  line-height: 1.4;
  opacity: 0;
  filter: alpha(opacity=0);
}
.tooltip.in {
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.tooltip.top {
  margin-top: -3px;
  padding: 5px 0;
}
.tooltip.right {
  margin-left: 3px;
  padding: 0 5px;
}
.tooltip.bottom {
  margin-top: 3px;
  padding: 5px 0;
}
.tooltip.left {
  margin-left: -3px;
  padding: 0 5px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #ffffff;
  text-align: center;
  text-decoration: none;
  background-color: #000000;
  border-radius: 4px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000000;
}
.tooltip.top-left .tooltip-arrow {
  bottom: 0;
  left: 5px;
  border-width: 5px 5px 0;
  border-top-color: #000000;
}
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  right: 5px;
  border-width: 5px 5px 0;
  border-top-color: #000000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  left: 5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  right: 5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000000;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1010;
  display: none;
  max-width: 276px;
  padding: 1px;
  text-align: left;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid #cccccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  white-space: normal;
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover-title {
  margin: 0;
  padding: 8px 14px;
  font-size: 10px;
  font-weight: normal;
  line-height: 18px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 5px 5px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover .arrow,
.popover .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover .arrow {
  border-width: 11px;
}
.popover .arrow:after {
  border-width: 10px;
  content: "";
}
.popover.top .arrow {
  left: 50%;
  margin-left: -11px;
  border-bottom-width: 0;
  border-top-color: #999999;
  border-top-color: rgba(0, 0, 0, 0.25);
  bottom: -11px;
}
.popover.top .arrow:after {
  content: " ";
  bottom: 1px;
  margin-left: -10px;
  border-bottom-width: 0;
  border-top-color: #ffffff;
}
.popover.right .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-left-width: 0;
  border-right-color: #999999;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.popover.right .arrow:after {
  content: " ";
  left: 1px;
  bottom: -10px;
  border-left-width: 0;
  border-right-color: #ffffff;
}
.popover.bottom .arrow {
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
  top: -11px;
}
.popover.bottom .arrow:after {
  content: " ";
  top: 1px;
  margin-left: -10px;
  border-top-width: 0;
  border-bottom-color: #ffffff;
}
.popover.left .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999999;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.popover.left .arrow:after {
  content: " ";
  right: 1px;
  border-right-width: 0;
  border-left-color: #ffffff;
  bottom: -10px;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  overflow: hidden;
  width: 100%;
}
.carousel-inner > .item {
  display: none;
  position: relative;
  -webkit-transition: 0.6s ease-in-out left;
  transition: 0.6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  max-width: 100%;
  height: auto;
  line-height: 1;
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 15%;
  opacity: 0.5;
  filter: alpha(opacity=50);
  font-size: 20px;
  color: #ffffff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(left, color-stop(rgba(0, 0, 0, 0.5) 0%), color-stop(rgba(0, 0, 0, 0.0001) 100%));
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}
.carousel-control.right {
  left: auto;
  right: 0;
  background-image: -webkit-linear-gradient(left, color-stop(rgba(0, 0, 0, 0.0001) 0%), color-stop(rgba(0, 0, 0, 0.5) 100%));
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
}
.carousel-control:hover,
.carousel-control:focus {
  outline: none;
  color: #ffffff;
  text-decoration: none;
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  margin-top: -10px;
  margin-left: -10px;
  font-family: serif;
}
.carousel-control .icon-prev:before {
  content: '\2039';
}
.carousel-control .icon-next:before {
  content: '\203a';
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  margin-left: -30%;
  padding-left: 0;
  list-style: none;
  text-align: center;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  border: 1px solid #ffffff;
  border-radius: 10px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
}
.carousel-indicators .active {
  margin: 0;
  width: 12px;
  height: 12px;
  background-color: #ffffff;
}
.carousel-caption {
  position: absolute;
  left: 15%;
  right: 15%;
  bottom: 20px;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #ffffff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .carousel-control .glyphicons-chevron-left,
  .carousel-control .glyphicons-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -15px;
    margin-left: -15px;
    font-size: 30px;
  }
  .carousel-caption {
    left: 20%;
    right: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }
}
.clearfix:before,
.clearfix:after {
  content: " ";
  display: table;
}
.clearfix:after {
  clear: both;
}
.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
  visibility: hidden !important;
}
.affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
tr.visible-xs,
th.visible-xs,
td.visible-xs {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-xs.visible-sm {
    display: block !important;
  }
  table.visible-xs.visible-sm {
    display: table;
  }
  tr.visible-xs.visible-sm {
    display: table-row !important;
  }
  th.visible-xs.visible-sm,
  td.visible-xs.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-xs.visible-md {
    display: block !important;
  }
  table.visible-xs.visible-md {
    display: table;
  }
  tr.visible-xs.visible-md {
    display: table-row !important;
  }
  th.visible-xs.visible-md,
  td.visible-xs.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-xs.visible-lg {
    display: block !important;
  }
  table.visible-xs.visible-lg {
    display: table;
  }
  tr.visible-xs.visible-lg {
    display: table-row !important;
  }
  th.visible-xs.visible-lg,
  td.visible-xs.visible-lg {
    display: table-cell !important;
  }
}
.visible-sm,
tr.visible-sm,
th.visible-sm,
td.visible-sm {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-sm.visible-xs {
    display: block !important;
  }
  table.visible-sm.visible-xs {
    display: table;
  }
  tr.visible-sm.visible-xs {
    display: table-row !important;
  }
  th.visible-sm.visible-xs,
  td.visible-sm.visible-xs {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-sm.visible-md {
    display: block !important;
  }
  table.visible-sm.visible-md {
    display: table;
  }
  tr.visible-sm.visible-md {
    display: table-row !important;
  }
  th.visible-sm.visible-md,
  td.visible-sm.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-sm.visible-lg {
    display: block !important;
  }
  table.visible-sm.visible-lg {
    display: table;
  }
  tr.visible-sm.visible-lg {
    display: table-row !important;
  }
  th.visible-sm.visible-lg,
  td.visible-sm.visible-lg {
    display: table-cell !important;
  }
}
.visible-md,
tr.visible-md,
th.visible-md,
td.visible-md {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-md.visible-xs {
    display: block !important;
  }
  table.visible-md.visible-xs {
    display: table;
  }
  tr.visible-md.visible-xs {
    display: table-row !important;
  }
  th.visible-md.visible-xs,
  td.visible-md.visible-xs {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-md.visible-sm {
    display: block !important;
  }
  table.visible-md.visible-sm {
    display: table;
  }
  tr.visible-md.visible-sm {
    display: table-row !important;
  }
  th.visible-md.visible-sm,
  td.visible-md.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table;
  }
  tr.visible-md {
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-md.visible-lg {
    display: block !important;
  }
  table.visible-md.visible-lg {
    display: table;
  }
  tr.visible-md.visible-lg {
    display: table-row !important;
  }
  th.visible-md.visible-lg,
  td.visible-md.visible-lg {
    display: table-cell !important;
  }
}
.visible-lg,
tr.visible-lg,
th.visible-lg,
td.visible-lg {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-lg.visible-xs {
    display: block !important;
  }
  table.visible-lg.visible-xs {
    display: table;
  }
  tr.visible-lg.visible-xs {
    display: table-row !important;
  }
  th.visible-lg.visible-xs,
  td.visible-lg.visible-xs {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-lg.visible-sm {
    display: block !important;
  }
  table.visible-lg.visible-sm {
    display: table;
  }
  tr.visible-lg.visible-sm {
    display: table-row !important;
  }
  th.visible-lg.visible-sm,
  td.visible-lg.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-lg.visible-md {
    display: block !important;
  }
  table.visible-lg.visible-md {
    display: table;
  }
  tr.visible-lg.visible-md {
    display: table-row !important;
  }
  th.visible-lg.visible-md,
  td.visible-lg.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }
}
.hidden-xs {
  display: block !important;
}
table.hidden-xs {
  display: table;
}
tr.hidden-xs {
  display: table-row !important;
}
th.hidden-xs,
td.hidden-xs {
  display: table-cell !important;
}
@media (max-width: 767px) {
  .hidden-xs,
  tr.hidden-xs,
  th.hidden-xs,
  td.hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-xs.hidden-sm,
  tr.hidden-xs.hidden-sm,
  th.hidden-xs.hidden-sm,
  td.hidden-xs.hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-xs.hidden-md,
  tr.hidden-xs.hidden-md,
  th.hidden-xs.hidden-md,
  td.hidden-xs.hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-xs.hidden-lg,
  tr.hidden-xs.hidden-lg,
  th.hidden-xs.hidden-lg,
  td.hidden-xs.hidden-lg {
    display: none !important;
  }
}
.hidden-sm {
  display: block !important;
}
table.hidden-sm {
  display: table;
}
tr.hidden-sm {
  display: table-row !important;
}
th.hidden-sm,
td.hidden-sm {
  display: table-cell !important;
}
@media (max-width: 767px) {
  .hidden-sm.hidden-xs,
  tr.hidden-sm.hidden-xs,
  th.hidden-sm.hidden-xs,
  td.hidden-sm.hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm,
  tr.hidden-sm,
  th.hidden-sm,
  td.hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-sm.hidden-md,
  tr.hidden-sm.hidden-md,
  th.hidden-sm.hidden-md,
  td.hidden-sm.hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-sm.hidden-lg,
  tr.hidden-sm.hidden-lg,
  th.hidden-sm.hidden-lg,
  td.hidden-sm.hidden-lg {
    display: none !important;
  }
}
.hidden-md {
  display: block !important;
}
table.hidden-md {
  display: table;
}
tr.hidden-md {
  display: table-row !important;
}
th.hidden-md,
td.hidden-md {
  display: table-cell !important;
}
@media (max-width: 767px) {
  .hidden-md.hidden-xs,
  tr.hidden-md.hidden-xs,
  th.hidden-md.hidden-xs,
  td.hidden-md.hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-md.hidden-sm,
  tr.hidden-md.hidden-sm,
  th.hidden-md.hidden-sm,
  td.hidden-md.hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md,
  tr.hidden-md,
  th.hidden-md,
  td.hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-md.hidden-lg,
  tr.hidden-md.hidden-lg,
  th.hidden-md.hidden-lg,
  td.hidden-md.hidden-lg {
    display: none !important;
  }
}
.hidden-lg {
  display: block !important;
}
table.hidden-lg {
  display: table;
}
tr.hidden-lg {
  display: table-row !important;
}
th.hidden-lg,
td.hidden-lg {
  display: table-cell !important;
}
@media (max-width: 767px) {
  .hidden-lg.hidden-xs,
  tr.hidden-lg.hidden-xs,
  th.hidden-lg.hidden-xs,
  td.hidden-lg.hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-lg.hidden-sm,
  tr.hidden-lg.hidden-sm,
  th.hidden-lg.hidden-sm,
  td.hidden-lg.hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-lg.hidden-md,
  tr.hidden-lg.hidden-md,
  th.hidden-lg.hidden-md,
  td.hidden-lg.hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-lg,
  tr.hidden-lg,
  th.hidden-lg,
  td.hidden-lg {
    display: none !important;
  }
}
.visible-print,
tr.visible-print,
th.visible-print,
td.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
  .hidden-print,
  tr.hidden-print,
  th.hidden-print,
  td.hidden-print {
    display: none !important;
  }
}   

</style>



<?php

?>

<head>
<title>Print Report Statement</title>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
    <title>Inosis Loyalti Program</title>
    <!-- Bootstrap core CSS -->

    
  
</head>


<?php
			    $index ='';
				$inputktp='';
				$txtKodeProgram='';
				$jumlah_point = 0;
				$total_point = 0;
				$summarry_point = 0;
				$arch_last = 0;
				$arch_last_year = 0;
				$arch_target_last = 0;
				$arch_sales_last = 0;
				$arch_point_last = 0;
					
				$tanggal_cetak = date("j F Y , h:i:s A");
				
				
				$result_tanggal = mysqli_query($trconn,"SELECT DATE_FORMAT(MAX(tgl_transaksi),'%d %M %Y') as tanggal_periode FROM trx_transaksi WHERE STATUS='A'")  or die ("Error : " . mysqli_error());
				if ($row_tanggal = mysqli_fetch_array($result_tanggal, MYSQL_ASSOC)){
						$tanggal_periode = $row_tanggal["tanggal_periode"]; 
				}	
			
					
					
			   $inputktp = $_GET['inputktp'];
				

				$result_outlet = mysqli_query($trconn, "SELECT a.city_id_alias,city_name_alias,a.distributor_id,distributor_name,
															  a.outlet_id,outlet_name,nama_konsumen,alamat1,alamat2,rtrw,
															   d.name as kelurahan,e.name as kecamatan,f.name as kabupaten,
															   g.name as propinsi,npwp,
															   kodepos,telepon1,telepon2,a.region_id,ektp,i.wa_number as wa_number
														  FROM mstr_outlet a
														  INNER JOIN mstr_distributor b ON a.distributor_id=b.distributor_id
														  INNER JOIN ms_city_alias c ON c.city_id_alias = a.city_id_alias
														  LEFT JOIN `indonesia`.`desa` d ON d.`id` = a.`kelurahan`
														  LEFT JOIN `indonesia`.`kecamatan` e ON e.`id` = a.`kecamatan`
														  LEFT JOIN `indonesia`.`kabupaten` f ON f.`id` = a.`kabupaten`
														  LEFT JOIN `indonesia`.`propinsi` g ON g.`id` = a.`propinsi`
														  LEFT JOIN `ms_wa_admin` i on i.region_id = a.region_id
														  LEFT JOIN `ms_program_addon` j on j.outlet_id = a.outlet_id
														  WHERE a.outlet_id ='$inputktp'") or die ("Error : " . mysqli_error($trconn));

				if ($row_outlet = mysqli_fetch_array($result_outlet, MYSQL_ASSOC)){
					$region_id			 = $row_outlet["region_id"];
					$area_id 	 		 = $row_outlet["city_id_alias"];
					$area_name   		 = $row_outlet["city_name_alias"];
					$distributor_id 	 = $row_outlet["distributor_id"];
					$distributor_name    = $row_outlet["distributor_name"];
					$outlet_id 			 = $row_outlet["outlet_id"];
					$outlet_name    	 = $row_outlet["outlet_name"];
					$nama_konsumen 	     = $row_outlet["nama_konsumen"];
					$alamat1			 = $row_outlet["alamat1"];
					$alamat2			 = $row_outlet["alamat2"];
					$rtrw				 = $row_outlet["rtrw"];
					$kelurahan			 = $row_outlet["kelurahan"];
					$kecamatan			 = $row_outlet["kecamatan"];
					$kota				 = $row_outlet["kabupaten"];
					$propinsi			 = $row_outlet["propinsi"];
					$kodepos			 = $row_outlet["kodepos"];
					$tel1				 = $row_outlet["telepon1"];
					$tel2				 = $row_outlet["telepon2"];
					$ektp				 = $row_outlet["ektp"];
					$wa_number           = $row_outlet["wa_number"];
					$mbd			 	 = $row_outlet["mbd"];
					$npwp				 = $row_outlet["npwp"];
				}
				mysqli_free_result($result_outlet);		

?>
 
<body onLoad="window.print();setTimeout(function(){window.close();}, 1);">
<!--halaman ke satu -->	
<table width="90%" align="center" border="0" >
			<tr>
				<td colspan="3">
						<div class="panel panel-primary">
							<table width="100%" border="0" cellpadding="1" cellspacing="1">
								<tr>
									<td width="20%"><img src="../images/logo_loreal.png" height="30"></td>
									<td width="50%" valign="middle"><h4><b>&nbsp;&nbsp;MONDELEZ INDONESIA</b><br><h5>Graha Inti Fauzi, 10th Floor ,Jl. Buncit Raya No.22, Jakarta 12510
									</td>
									<td  align="right"><img src="../images/whatsapp.png" height="40" ></td>
									<td ><h3>&nbsp;<?php echo rtrim(chunk_split($wa_number, 4,'-'),"-") ?></td>
								</tr>	
							</table>
						
						</div>
				</td> 
			</tr>
			<tr><td colspan="2" align="left"><h4><b>POINT STATEMENT MONDELEZ VAGANZA 2021 <?php echo "$quarter_name" ?></td><td align="right" valign="bottom"><h5>Cetak: <?php echo $tanggal_cetak ?><br></td></tr>
			<tr>
				<td width ="52%" valign="top">
					<div class="panel panel-primary">
					<table width="100%" height="90"  colspan="5" cellpadding="5">
								<tr><td><h5><small><b>Kepada Yth,</b></small><br>
											<b><?php echo $nama_konsumen ?><br>
											<small><i>Outlet&nbsp;&nbsp;:&nbsp;&nbsp;</i></small><?php echo $outlet_name ?>&nbsp; , <small><i>Id Outlet&nbsp;&nbsp;:&nbsp;&nbsp;</i></small> <?php echo $outlet_id ?><br>
											<?php echo $alamat1 ?> <?php echo $alamat2 ?></b><br>
											<small><i>RT/RW&nbsp;&nbsp;:&nbsp;&nbsp;</i></small> <b><?php echo $rtrw ?></b>, <small><i>Kelurahan&nbsp;&nbsp;:&nbsp;&nbsp;</i></small><b> <?php echo $kelurahan ?></b>
											<small><i>Kecamatan&nbsp;&nbsp;:&nbsp;&nbsp;</i></small><b> <?php echo $kecamatan ?></b><br>
											<small><i>Kabupaten / Kotamadya &nbsp;&nbsp;:&nbsp;&nbsp;</i></small><b><?php echo $kota ?></b>, <small><i>Propinsi &nbsp;&nbsp;:&nbsp;&nbsp;</i></small><b><?php echo $propinsi ?></b>,&nbsp;<b><?php echo $kodepos ?></b><br>
											<small><i>Phone&nbsp;&nbsp;:&nbsp;&nbsp;</i></small> <b><?php echo $tel1?></b>,&nbsp;<b> <?php echo $tel2?></b>
									</td>
									
								</tr>	
							</table>
					</div>
					<h5><small><i>Distributor  :&nbsp;</i> <?php echo $distributor_name ?>  <i>&nbsp;&nbsp;&nbsp;Area :&nbsp;</i> <?php echo $area_name ?></h5>
				</td>
				<td width ="2%">
				</td>
				<td width ="50%" valign="top">
                   <?php
				    $total_point = 0;
                   	$result_sales = mysqli_query($trconn, "SELECT target_annual,COALESCE(sales,0)AS sales,COALESCE(poin,0)AS poin,COALESCE(poin_quarter,0)AS poin_quarter,COALESCE(poin_redeem,0)AS poin_redeem FROM `mstr_target_outlet` a
															LEFT JOIN (
																SELECT no_id AS outlet_id,SUM(sales)AS sales,SUM(point_satuan)AS poin FROM `trx_transaksi` a
																INNER JOIN `trx_transaksi_barang` b ON a.`kd_transaksi` = b.`kd_transaksi`
																WHERE 1=1 AND no_id='$inputktp' AND STATUS='A')b ON a.`outlet_id` = b.outlet_id
															LEFT JOIN (
																SELECT no_id AS outlet_id,SUM(point_satuan)AS poin_quarter FROM `trx_transaksi` a
																INNER JOIN `trx_transaksi_barang` b ON a.`kd_transaksi` = b.`kd_transaksi`
																WHERE 1=1 AND no_id='$inputktp' AND nama_produk='BONUS QUARTER' AND STATUS='B')c ON a.`outlet_id` = c.outlet_id	
															LEFT JOIN( 
																SELECT no_id AS outlet_id,SUM(point_satuan*quantity)AS poin_redeem FROM `trx_transaksi_redeem` a
																INNER JOIN `trx_transaksi_redeem_barang` b ON a.`kd_transaksi` = b.`kd_transaksi`
																WHERE 1=1 AND no_id='$inputktp' AND STATUS='R')d ON a.`outlet_id` = d.outlet_id
															WHERE a.outlet_id='$inputktp'
														   ") or die ("Error : " . mysqli_error($trconn));
                   
                   ?>
                <div class="panel panel-primary">
						<table width="100%" height="90" colspan="1" cellpadding="1">
						<tr><td valign="top">
						<table width="100%" class="mainContent" border="0" cellspacing="1" cellpadding="1">
						<tr class="success">
										<td>&nbsp;</td>
										<td align="left"width="20%"><h5><small><b><b></b>&nbsp;</td>
										<td>&nbsp;</td>
										<td align="right" width="23%"><h5><small><b>TARGET</b></td>
										<td align="right" width="23%"><h5><small>&nbsp;<b>ACTUAL</b>&nbsp;</td>
                                        <td align="right" width="23%"><h5><small>&nbsp;<b>%</b>&nbsp;</td>
                                        
										<td>&nbsp;</td>
									</tr>
								<?php						 
									$i =0;
									$target = 0;
									$sales =  0;
									$regular = 0;
									$quarter = 0;
									$redeem = 0;
									
                                    while ($row_sales= mysqli_fetch_array($result_sales, MYSQL_ASSOC)) { 
										$pencapaian =(($row_sales["sales"]/$row_sales["target_annual"])*100);
											$target = $row_sales["target_annual"];
											$sales =  $row_sales["sales"];
											$regular = $row_sales["poin"];
											$quarter = $row_sales["poin_quarter"];
											$redeem = $row_sales["poin_redeem"];
										} ?> 
									   
						
								
								<tr>
									<td>&nbsp;</td>
									<td align="left"><h5><small><b>SALES</td>
									<td>&nbsp;</td>
                                    <td align="right"><h5><small><?php echo number_format($target); ?></td>
                                    <td align="right"><h5><small><?php echo number_format($sales); ?></td>
                                    <td align="right"><h5><small><?php echo number_format(($sales/$target)*100,2); ?>%</td>
                                    <td>&nbsp;</td>
								</tr>
                                <tr>
									<td>&nbsp;</td>
									<td align="right"><h5><small><b></td>
									<td align="right"><h5><small><b>REGULAR</td>
									<td align="right"><h5><small><b>QUARTER</td>
									<td align="right"><h5><small><b>REDEEM</td>
									<td align="right"><h5><small><b>BALANCE</td>
								</tr>
							
								<tr>
									<td>&nbsp;</td>
									<td align="left"><h5><small><b>POIN</td> 
									<td align="right"><h5><small><?php echo number_format($regular,2); ?></td>
									<td align="right"><h5><small><?php echo number_format($quarter,2); ?></td>
									<td align="right"><h5><small><?php echo number_format($redeem,2); ?></td>		
                                    <td align="right"><h5><small><?php 
										$total_point = ($regular+$quarter)-$redeem;
										echo number_format($total_point,2); ?></td>
									
                                    <td>&nbsp;</td>
									</tr>			
					</table>
						</td></tr>
						</table>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
				<table  width ="100%" border="0" cellspacing="2" cellpadding="2">
					<tr ><!-- Row 3 -->
					  
					   <td width="25%" align="left" valign="middle"><h5><small>Nomor E-KTP (WAJIB DIISI) </td><!-- Col 1 -->
					   <td width="3%" valign="top">: &nbsp;&nbsp;</td>
					   <td width="72%" align="left" valign="top"><b>
									<?php 
										if (!isset($ektp) || trim($ektp) === ''){
									
									?>	
									<table border="1">
										<tr>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
										</tr>
									</table> 
									<?php }else { ?>
									
										<?php  echo $ektp; ?>	
								
									
									<?php	}	?>
					   </td>
					   <!-- Col 2 -->
					</tr>
					<tr ><!-- Row 3 -->
					  
					   <td width="25%" align="left" valign="middle"><h5><small>Nomor NPWP  </td><!-- Col 1 -->
					   <td width="3%" valign="top">: &nbsp;&nbsp;</td>
					   <td width="72%" align="left" valign="top"><b>
									<?php 
										if (!isset($npwp) || trim($npwp) === ''){
									
									?>	
									<table border="1">
										<tr>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
										</tr>
									</table> 
									<?php }else { ?>
									
										<?php  echo $npwp; ?>	
								
									
									<?php	}	?>
					   </td>
					   <!-- Col 2 -->
					</tr>	
					<tr ><!-- Row 3 -->
					  
					   <td width="25%" align="left" valign="bottom" colspan="3"><h5><small>* JIKA NOMOR REKENING BANK ATAS NAMA BADAN USAHA MAKA WAJIB MENCANTUMKAN NOMOR NPWP BADAN USAHA  </td><!-- Col 1 -->
					 
					   <!-- Col 2 -->
					</tr>
					<tr ><!-- Row 3 -->
					  
					   <td width="25%" align="left" valign="bottom" colspan="3"><h5><small> * JIKA NOMOR REKENING BANK ATAS NAMA PRIBADI MAKA WAJIB MENCANTUMKAN NOMOR NPWP PRIBADI ATAU NOMOR EKTP  </td><!-- Col 1 -->
					 
					   <!-- Col 2 -->
					</tr>								
				</table>
				</td>
			</tr>
			
			<tr><td colspan="3"></td></tr>	

			<tr>
			<td colspan="3">
				<div class="panel panel-primary">
				<div class="panel-heading"><h5><b>TRANSAKSI PEROLEHAN POINT BULAN</b></div>	
				<table id="dataTable" class="table3" colspan="0" cellpadding="0">
						<tr class="success">
							<td width="2%">&nbsp;</td>
							<td width="3%" align="left"><h5><small><B>NO</td>
							<td width="10%" align="left"><h5><small><B>BULAN</td>
							<td width="11%" align="right"><h5><small><B>TARGET</td>
							<td width="11%" align="right"><h5><small><B>ACTUAL</td>
							<td width="8%" align="center"><h5><small><B>%</td>
							<td width="8%" align="right"><h5><small><b>REGULAR POINT</td>
							<td width="8%" align="right"><h5><small><b>BALANCE</td>
							<td width="2%">&nbsp;</td>
						</tr>
	
						<?php 
						$bulan = mysqli_query($trconn, "SELECT a.bulan,`target_sales`,actual,poin_regular FROM `ms_bulan` a
															   LEFT JOIN (
																SELECT `outlet_id`,`month_target`,`target_sales` FROM `mstr_sales_target` WHERE outlet_id ='$inputktp' 
																UNION 
																SELECT `outlet_id`,`month_target`,`target_sales` FROM `mstr_sales_target2` WHERE outlet_id ='$inputktp'
																UNION
																SELECT `outlet_id`,`month_target`,`target_sales` FROM `mstr_sales_target3` WHERE outlet_id ='$inputktp'
																UNION
																SELECT `outlet_id`,`month_target`,`target_sales` FROM `mstr_sales_target4` WHERE outlet_id ='$inputktp')b ON a.bulan = b.`month_target`
															   LEFT JOIN (
																SELECT MONTHNAME(`tgl_transaksi`)AS bulan,SUM(sales)AS actual, SUM(`point_satuan`)AS poin_regular FROM `trx_transaksi` a
																INNER JOIN `trx_transaksi_barang` b ON a.`kd_transaksi` = b.`kd_transaksi`
																WHERE no_id ='$inputktp' AND STATUS='A'
																GROUP BY MONTHNAME(`tgl_transaksi`)
																)c ON a.bulan = c.bulan
																
															ORDER BY a.id
														") or die ("Error : " . mysqli_error());											  
						$index = 1;
						$add_point = 0;
						$red_point = 0;
						$sisa_point = 0;
						$target = 0;
						$sales = 0;
						$point =0;
						$bonus_pf = 0;
						$bonus_mon = 0;
						$bonus_per = 0;
						$bonus_carry  = 0;
						$redeem = 0;
						$ttl_point=0;
						
						$ttl=0;
												 
						while ($row_bulan= mysqli_fetch_array($bulan, MYSQL_ASSOC)) { 
							?>
						<tr>
							<td >&nbsp;</td>
							<td align="left"><h5><small><b><?php echo $index;?></td>
							<td align="left"><h5><small><?php echo $row_bulan["bulan"];?></td>
							<td align="right"><h5><small>
							<?php echo number_format($row_bulan["target_sales"]);?>
							
							</td>
							<td align="right"><h5><small><?php echo number_format($row_bulan["actual"]);
														  	?></td>
							<td align="center"><h5><small>

							<?php echo number_format((($row_bulan["actual"]/$row_bulan["target_sales"])*100),2);?>

							%</td>
							<td align="right"><h5><small><?php echo number_format($row_bulan["poin_regular"],2);?></td>
							
							<td align="right"><h5><small><?php 
								$sisa_point = $row_bulan["poin_regular"];
								echo number_format($sisa_point,2) ; 
							
													
							 $target += $row_bulan["target_sales"];
							 $sales += $row_bulan["actual"];
							 $point += $row_bulan["poin_regular"];
							 $redeem += $row_bulan["total_redeem"];
							 
							?></td>
							<td >&nbsp;</td>		
						</tr>
							<?php
							$index++;
							}
							?>
						<tr height="15">
							<td colspan="2">&nbsp;</td>
							<td align="left" ><h5><small><b>TOTAL</td>
							<td align="right"><h5><small><b><?php echo number_format($target);?></td>
							<td align="right"><h5><small><b><?php echo number_format($sales);?></td>
							<td align="center"><h5><small><b><?php echo number_format((($sales/$target)*100),2);?>%</td>
							<td align="right"><h5><small><b><?php echo number_format($point,2);?></td>
							
							<td align="right"><h5><small><b><?php 
									echo number_format(($point),2) ; 
									$ttl_point=($point);
							?></td>
							<td >&nbsp;</td>		
						</tr>
											</table>
				
				</div>	
			</td>
			</tr>
			
			<tr><td colspan="3"></td></tr>
			<tr>
			<td colspan="3">
				<div class="panel panel-primary">
				<div class="panel-heading"><h5><b>TRANSAKSI PEROLEHAN POINT QUARTER</b></div>	
				<table id="dataTable" class="table3" colspan="0" cellpadding="0">
						<tr class="success">
							<td width="2%">&nbsp;</td>
							<td width="3%" align="left"><h5><small><B>NO</td>
							<td width="10%" align="left"><h5><small><B>QUARTER</td>
							<td width="11%" align="right"><h5><small><B>TARGET</td>
							<td width="11%" align="right"><h5><small><B>ACTUAL</td>
							<td width="8%" align="center"><h5><small><B>%</td>
							<td width="8%" align="right"><h5><small><b>QUARTER POINT</td>
							<td width="8%" align="right"><h5><small><b>BALANCE</td>
							<td width="2%">&nbsp;</td>
						</tr>
	
						<?php 
						$bulan = mysqli_query($trconn, "SELECT a.quarter,`target_annual`,actual,poin FROM (
															SELECT 'QUARTER 1' AS QUARTER,`target_annual` FROM `mstr_target_outlet_q1` a WHERE outlet_id ='$inputktp'
															UNION
															SELECT 'QUARTER 2' AS QUARTER,`target_annual` FROM `mstr_target_outlet_q2` a WHERE outlet_id ='$inputktp'
															UNION
															SELECT 'QUARTER 3' AS QUARTER,`target_annual` FROM `mstr_target_outlet_q3` a WHERE outlet_id ='$inputktp'
															UNION
															SELECT 'QUARTER 4' AS QUARTER,`target_annual` FROM `mstr_target_outlet_q4` a WHERE outlet_id ='$inputktp')a
														INNER JOIN (	
															SELECT 'QUARTER 1' AS QUARTER,SUM(`sales`)AS actual FROM `trx_transaksi` a
															INNER JOIN `trx_transaksi_barang` b ON a.`kd_transaksi` = b.`kd_transaksi`
															WHERE STATUS ='A' AND MONTHNAME (`tgl_transaksi`) IN ('JANUARY','FEBRUARY','MARCH') AND no_id='$inputktp'
															UNION
															SELECT 'QUARTER 2' AS QUARTER,SUM(`sales`)AS actual FROM `trx_transaksi` a
															INNER JOIN `trx_transaksi_barang` b ON a.`kd_transaksi` = b.`kd_transaksi`
															WHERE STATUS ='A' AND MONTHNAME (`tgl_transaksi`) IN ('APRIL','MAY','JUNE') AND no_id='$inputktp'
															UNION
															SELECT 'QUARTER 3' AS QUARTER,SUM(`sales`)AS actual FROM `trx_transaksi` a
															INNER JOIN `trx_transaksi_barang` b ON a.`kd_transaksi` = b.`kd_transaksi`
															WHERE STATUS ='A' AND MONTHNAME (`tgl_transaksi`) IN ('JULY','AUGUST','SEPTEMBER') AND no_id='$inputktp'
															UNION
															SELECT 'QUARTER 4' AS QUARTER,SUM(`sales`)AS actual FROM `trx_transaksi` a
															INNER JOIN `trx_transaksi_barang` b ON a.`kd_transaksi` = b.`kd_transaksi`
															WHERE STATUS ='A' AND MONTHNAME (`tgl_transaksi`) IN ('OCTOBER','NOVEMBER','DECEMBER') AND no_id='$inputktp')b ON a.quarter = b.quarter
														INNER JOIN (	
															SELECT 'QUARTER 1' AS QUARTER,SUM(`point_satuan`)AS poin FROM `trx_transaksi` a
															INNER JOIN `trx_transaksi_barang` b ON a.`kd_transaksi` = b.`kd_transaksi`
															WHERE STATUS ='B' AND `nama_produk`='BONUS QUARTER' AND MONTHNAME (`tgl_transaksi`) IN ('JANUARY','FEBRUARY','MARCH') AND no_id='$inputktp'
															UNION
															SELECT 'QUARTER 2' AS QUARTER,SUM(`point_satuan`)AS poin  FROM `trx_transaksi` a
															INNER JOIN `trx_transaksi_barang` b ON a.`kd_transaksi` = b.`kd_transaksi`
															WHERE STATUS ='B' AND `nama_produk`='BONUS QUARTER' AND MONTHNAME (`tgl_transaksi`) IN ('APRIL','MAY','JUNE') AND no_id='$inputktp'
															UNION
															SELECT 'QUARTER 3' AS QUARTER,SUM(`point_satuan`)AS poin  FROM `trx_transaksi` a
															INNER JOIN `trx_transaksi_barang` b ON a.`kd_transaksi` = b.`kd_transaksi`
															WHERE STATUS ='B' AND `nama_produk`='BONUS QUARTER' AND MONTHNAME (`tgl_transaksi`) IN ('JULY','AUGUST','SEPTEMBER') AND no_id='$inputktp'
															UNION
															SELECT 'QUARTER 4' AS QUARTER,SUM(`point_satuan`)AS poin  FROM `trx_transaksi` a
															INNER JOIN `trx_transaksi_barang` b ON a.`kd_transaksi` = b.`kd_transaksi`
															WHERE STATUS ='B' AND `nama_produk`='BONUS QUARTER' AND MONTHNAME (`tgl_transaksi`) IN ('OCTOBER','NOVEMBER','DECEMBER') AND no_id='$inputktp')c ON a.quarter = c.quarter") or die ("Error : " . mysqli_error());											  
						$index = 1;
						$add_point = 0;
						$red_point = 0;
						$sisa_point = 0;
						$target = 0;
						$sales = 0;
						$point =0;
						$bonus_pf = 0;
						$bonus_mon = 0;
						$bonus_per = 0;
						$bonus_carry  = 0;
						$redeem = 0;
						$ttl_point=0;
						
						$ttl=0;
												 
						while ($row_bulan= mysqli_fetch_array($bulan, MYSQL_ASSOC)) { 
							?>
						<tr>
							<td >&nbsp;</td>
							<td align="left"><h5><small><b><?php echo $index;?></td>
							<td align="left"><h5><small><?php echo $row_bulan["quarter"];?></td>
							<td align="right"><h5><small>
							<?php echo number_format($row_bulan["target_annual"]);?>
							
							</td>
							<td align="right"><h5><small><?php echo number_format($row_bulan["actual"]);
														  	?></td>
							<td align="center"><h5><small>

							<?php echo number_format((($row_bulan["actual"]/$row_bulan["target_annual"])*100),2);?>

							%</td>
							<td align="right"><h5><small><?php echo number_format($row_bulan["poin"],2);?></td>
							
							<td align="right"><h5><small><?php 
								$sisa_point = $row_bulan["poin"];
								echo number_format($sisa_point,2) ; 
							
													
							 $target += $row_bulan["target_annual"];
							 $sales += $row_bulan["actual"];
							 $point += $row_bulan["poin"];
						
							 
							?></td>
							<td >&nbsp;</td>		
						</tr>
							<?php
							$index++;
							}
							?>
						<tr height="15">
							<td colspan="2">&nbsp;</td>
							<td align="left" ><h5><small><b>TOTAL</td>
							<td align="right"><h5><small><b><?php echo number_format($target);?></td>
							<td align="right"><h5><small><b><?php echo number_format($sales);?></td>
							<td align="center"><h5><small><b><?php echo number_format((($sales/$target)*100),2);?>%</td>
							<td align="right"><h5><small><b><?php echo number_format($point,2);?></td>
							
							<td align="right"><h5><small><b><?php 
									echo number_format(($point),2) ; 
									$ttl_point=($point);
							?></td>
							<td >&nbsp;</td>		
						</tr>
											</table>
				
				</div>	
			</td>
			</tr>

			<tr>
			<td colspan="3">
				<div class="panel panel-success">
				<div class="panel-heading"><h5><b>TRANSAKSI PENUKARAN HADIAH</b></div>
				
				<table id="dataTable" class="table2" colspan="4" cellpadding="4">
						<tr>
							<td width="04%"  align="center"><h5><small><b>No</td>
							<td width="10%"  align="center"><h5><small><b>Tanggal Transaksi</td>
							<td width="34%"  align="center"><h5><small><b>Nama Produk</td>
							<td width="06%"  align="right"><h5><small><b>Qty</td>
							<td width="08%"  align="right"><h5><small><b>Point</td>
							<td width="08%"  align="right"><h5><small><b>Total</td>
							<td width="01%"></td>
						</tr>
											  
											  
						<?php 
						$index = 1;
						$add_point = 0;
						$red_point = 0;
						$sisa_point = 0;
						$result = mysqli_query($trconn,  "select a.tgl_transaksi,a.status,b.kd_produk,b.nama_produk,b.quantity as quantity_barang ,
																b.point_satuan as point_barang,product_code 
																from trx_transaksi_redeem a
																inner join trx_transaksi_redeem_barang b on a.kd_transaksi = b.kd_transaksi
																inner join mstr_program_barang d on d.product_id = b.kd_produk
																where no_id ='$inputktp' and status='R'	
																order by a.tgl_transaksi") 
										or die ("Error : " . mysqli_error());						 
						while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) { 
							$redeem_point = 0;
						?>
						<tr class="tableColumnBody<?php echo $index%2==0?"":"2"?>" height="15">
							<td align="center"><h5><small><?php echo $index ?></td>		
							<td align="center"><h5><small><?php echo date("d M Y",strtotime($row["tgl_transaksi"]))?></td>
							<td><h5><small><?php echo $row["nama_produk"]?></td>
							<td align="right"><h5><small><?php echo $row["quantity_barang"]?></td>
							<td align="right"><h5><small><?php echo $row["point_barang"] ?></td>
							<td align="right"><h5><small><?php $redeem_point = $row["quantity_barang"]*$row["point_barang"];
								$jumlah_point = $jumlah_point+$redeem_point; 
								echo number_format($redeem_point); ?></td>
								<td width="01%"></td>
						</tr> 
						<?php   
						$index++;
						}
						?>
											  
												
						<?php
						$sisa_point = $add_point - $red_point;
						?>  
																						
					</table>
				</div>	
			</td>
			</tr>	
										
			</table>
		
	
	
			<!--end halaman ke satu -->	
		
			<div style="page-break-after:always;"> </div>	
		
<?php if ($total_point>'0') { ?>						

			<!--halaman ke dua -->	
			<table width="90%" align="center" border="0" >
			<tr>
				<td colspan="3">
						<div class="panel panel-primary">
							<table width="100%" border="0" cellpadding="1" cellspacing="1">
								<tr>
									<td width="20%"><img src="../images/logo_loreal.png" height="30"></td>
									<td width="50%" valign="middle"><h4><b>&nbsp;&nbsp;MONDELEZ INDONESIA</b><br><h5>Graha Inti Fauzi, 10th Floor ,Jl. Buncit Raya No.22, Jakarta 12510
									</td>
									<td  align="right"><img src="../images/whatsapp.png" height="40" ></td>
									<td ><h3>&nbsp;<?php echo rtrim(chunk_split($wa_number, 4,'-'),"-") ?></td>
								</tr>	
							</table>
						
						</div>
				</td> 
			</tr>
			<tr><td colspan="2" align="left"><h4><b>POINT STATEMENT MONDELEZ VAGANZA 2021 <?php echo "$quarter_name" ?></td><td align="right" valign="bottom"><h5>Cetak: <?php echo $tanggal_cetak ?><br></td></tr>
			<tr>
				<td width ="52%" valign="top">
					<div class="panel panel-primary">
					<table width="100%" height="90"  colspan="5" cellpadding="5">
								<tr><td><h5><small><b>Kepada Yth,</b></small><br>
											<b><?php echo $nama_konsumen ?><br>
											<small><i>Outlet&nbsp;&nbsp;:&nbsp;&nbsp;</i></small><?php echo $outlet_name ?>&nbsp; , <small><i>Id Outlet&nbsp;&nbsp;:&nbsp;&nbsp;</i></small> <?php echo $outlet_id ?><br>
											<?php echo $alamat1 ?> <?php echo $alamat2 ?></b><br>
											<small><i>RT/RW&nbsp;&nbsp;:&nbsp;&nbsp;</i></small> <b><?php echo $rtrw ?></b>, <small><i>Kelurahan&nbsp;&nbsp;:&nbsp;&nbsp;</i></small><b> <?php echo $kelurahan ?></b>
											<small><i>Kecamatan&nbsp;&nbsp;:&nbsp;&nbsp;</i></small><b> <?php echo $kecamatan ?></b><br>
											<small><i>Kabupaten / Kotamadya &nbsp;&nbsp;:&nbsp;&nbsp;</i></small><b><?php echo $kota ?></b>, <small><i>Propinsi &nbsp;&nbsp;:&nbsp;&nbsp;</i></small><b><?php echo $propinsi ?></b>,&nbsp;<b><?php echo $kodepos ?></b><br>
											<small><i>Phone&nbsp;&nbsp;:&nbsp;&nbsp;</i></small> <b><?php echo $tel1?></b>,&nbsp;<b> <?php echo $tel2?></b>
									</td>
									
								</tr>	
							</table>
					</div>
					<h5><small><i>Distributor  :&nbsp;</i> <?php echo $distributor_name ?>  <i>&nbsp;&nbsp;&nbsp;Area :&nbsp;</i> <?php echo $area_name ?></h5>
				</td>
				<td width ="2%">
				</td>
				<td width ="50%" valign="top">
				<?php
				    $total_point = 0;
                   	$result_sales = mysqli_query($trconn, "SELECT target_annual,COALESCE(sales,0)AS sales,COALESCE(poin,0)AS poin,COALESCE(poin_quarter,0)AS poin_quarter,COALESCE(poin_redeem,0)AS poin_redeem FROM `mstr_target_outlet` a
															LEFT JOIN (
																SELECT no_id AS outlet_id,SUM(sales)AS sales,SUM(point_satuan)AS poin FROM `trx_transaksi` a
																INNER JOIN `trx_transaksi_barang` b ON a.`kd_transaksi` = b.`kd_transaksi`
																WHERE 1=1 AND no_id='$inputktp' AND STATUS='A')b ON a.`outlet_id` = b.outlet_id
															LEFT JOIN (
																SELECT no_id AS outlet_id,SUM(point_satuan)AS poin_quarter FROM `trx_transaksi` a
																INNER JOIN `trx_transaksi_barang` b ON a.`kd_transaksi` = b.`kd_transaksi`
																WHERE 1=1 AND no_id='$inputktp' AND nama_produk='BONUS QUARTER' AND STATUS='B')c ON a.`outlet_id` = c.outlet_id	
															LEFT JOIN( 
																SELECT no_id AS outlet_id,SUM(point_satuan*quantity)AS poin_redeem FROM `trx_transaksi_redeem` a
																INNER JOIN `trx_transaksi_redeem_barang` b ON a.`kd_transaksi` = b.`kd_transaksi`
																WHERE 1=1 AND no_id='$inputktp' AND STATUS='R')d ON a.`outlet_id` = d.outlet_id
															WHERE a.outlet_id='$inputktp'
														   ") or die ("Error : " . mysqli_error($trconn));
                   
                   ?>
                <div class="panel panel-primary">
						<table width="100%" height="90" colspan="1" cellpadding="1">
						<tr><td valign="top">
						<table width="100%" class="mainContent" border="0" cellspacing="1" cellpadding="1">
						<tr class="success">
										<td>&nbsp;</td>
										<td align="left"width="20%"><h5><small><b><b></b>&nbsp;</td>
										<td>&nbsp;</td>
										<td align="right" width="23%"><h5><small><b>TARGET</b></td>
										<td align="right" width="23%"><h5><small>&nbsp;<b>ACTUAL</b>&nbsp;</td>
                                        <td align="right" width="23%"><h5><small>&nbsp;<b>%</b>&nbsp;</td>
                                        
										<td>&nbsp;</td>
									</tr>
								<?php						 
									$i =0;
									$target = 0;
									$sales =  0;
									$regular = 0;
									$quarter = 0;
									$redeem = 0;
									
                                    while ($row_sales= mysqli_fetch_array($result_sales, MYSQL_ASSOC)) { 
										$pencapaian =(($row_sales["sales"]/$row_sales["target_annual"])*100);
											$target = $row_sales["target_annual"];
											$sales =  $row_sales["sales"];
											$regular = $row_sales["poin"];
											$quarter = $row_sales["poin_quarter"];
											$redeem = $row_sales["poin_redeem"];
										} ?> 
									   
						
								
								<tr>
									<td>&nbsp;</td>
									<td align="left"><h5><small><b>SALES</td>
									<td>&nbsp;</td>
                                    <td align="right"><h5><small><?php echo number_format($target); ?></td>
                                    <td align="right"><h5><small><?php echo number_format($sales); ?></td>
                                    <td align="right"><h5><small><?php echo number_format(($sales/$target)*100,2); ?>%</td>
                                    <td>&nbsp;</td>
								</tr>
                                <tr>
									<td>&nbsp;</td>
									<td align="right"><h5><small><b></td>
									<td align="right"><h5><small><b>REGULAR</td>
									<td align="right"><h5><small><b>QUARTER</td>
									<td align="right"><h5><small><b>REDEEM</td>
									<td align="right"><h5><small><b>BALANCE</td>
								</tr>
							
								<tr>
									<td>&nbsp;</td>
									<td align="left"><h5><small><b>POIN</td> 
									<td align="right"><h5><small><?php echo number_format($regular,2); ?></td>
									<td align="right"><h5><small><?php echo number_format($quarter,2); ?></td>
									<td align="right"><h5><small><?php echo number_format($redeem,2); ?></td>		
                                    <td align="right"><h5><small><?php 
										$total_point = ($regular+$quarter)-$redeem;
										echo number_format($total_point,2); ?></td>
									
                                    <td>&nbsp;</td>
									</tr>			
					</table>
						</td></tr>
						</table>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
				<table  width ="100%" border="0" cellspacing="2" cellpadding="2">
					<tr ><!-- Row 3 -->
					  
					   <td width="25%" align="left" valign="middle"><h5><small>Nomor E-KTP (WAJIB DIISI) </td><!-- Col 1 -->
					   <td width="3%" valign="top">: &nbsp;&nbsp;</td>
					   <td width="72%" align="left" valign="top"><b>
									<?php 
										if (!isset($ektp) || trim($ektp) === ''){
									
									?>	
									<table border="1">
										<tr>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
										</tr>
									</table> 
									<?php }else { ?>
									
										<?php  echo $ektp; ?>	
								
									
									<?php	}	?>
					   </td>
					   <!-- Col 2 -->
					</tr>
					<tr ><!-- Row 3 -->
					  
					   <td width="25%" align="left" valign="middle"><h5><small>Nomor NPWP  </td><!-- Col 1 -->
					   <td width="3%" valign="top">: &nbsp;&nbsp;</td>
					   <td width="72%" align="left" valign="top"><b>
									<?php 
										if (!isset($npwp) || trim($npwp) === ''){
									
									?>	
									<table border="1">
										<tr>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
										</tr>
									</table> 
									<?php }else { ?>
									
										<?php  echo $npwp; ?>	
								
									
									<?php	}	?>
					   </td>
					   <!-- Col 2 -->
					</tr>	
					<tr ><!-- Row 3 -->
					  
					   <td width="25%" align="left" valign="bottom" colspan="3"><h5><small>* JIKA NOMOR REKENING BANK ATAS NAMA BADAN USAHA MAKA WAJIB MENCANTUMKAN NOMOR NPWP BADAN USAHA  </td><!-- Col 1 -->
					 
					   <!-- Col 2 -->
					</tr>
					<tr ><!-- Row 3 -->
					  
					   <td width="25%" align="left" valign="bottom" colspan="3"><h5><small> * JIKA NOMOR REKENING BANK ATAS NAMA PRIBADI MAKA WAJIB MENCANTUMKAN NOMOR NPWP PRIBADI ATAU NOMOR EKTP  </td><!-- Col 1 -->
					 
					   <!-- Col 2 -->
					</tr>						
				</table>
				</td>
			</tr>
			<tr><td colspan="3"></td></tr>
			<?php 
	 
				  
					$info_bank=0;

					$nama_rekening = "";
					$nama_bank = "";
					$nomor_rekening = "";
					$cabang = "";
					$kota = "";
					$nama_penerima = "";
					$tgl_transfer = "";
					$noreferensi = "";
					$info_bank=0;
					
					$query_rebate = mysqli_query($trconn,"SELECT DISTINCT nama_rekening,a.`nama_bank`as kode,b.nama_bank,nomor_rekening,`cabang_bank`AS cabang,`kota_bank` AS kota 
														  FROM `mstr_outlet` a
														  LEFT JOIN `indonesia`.`ms_bank` b ON  b.`id_bank` = a.`nama_bank`
														  WHERE outlet_id ='$inputktp'");

				    if ($row_rebate = mysqli_fetch_array($query_rebate, MYSQL_ASSOC)){
						$nama_rekening = $row_rebate["nama_rekening"];
						$nama_bank = $row_rebate["nama_bank"];
						$nomor_rekening = $row_rebate["nomor_rekening"];
						$cabang = $row_rebate["cabang"];
						$kota = $row_rebate["kota"];
						$nama_penerima = $row_rebate["nama_penerima"];
						$tgl_transfer = $row_rebate["tgl_transfer"];
						$noreferensi = $row_rebate["noreferensi"];
						
						$info_bank=1;
				
					
					?>

			
			<tr>
			<td colspan="3">
				<div class="panel panel-primary">
				<div class="panel-heading"><h5><b>INFROMASI REKENING</b></div>
					
					<table width="100%" border="0" cellpadding="1" cellspacing="1">
						<tr>
							<td width="5%">&nbsp;</td>
							<td colspan="4"><h5><small><u>DITRANSFER KE REKENING :</td>
						</tr>
						<tr>
							<td width="5%">&nbsp;</td>
							<td width="10%"><h5><small>NAMA  </td>
							<td width="30%"><table  border="1" align="left">
									<tr>
										<td><h5><i>&nbsp;&nbsp;<?php 
												if ($nama_rekening <>""){
													echo $nama_rekening;
												
											     }else{ ?> 
											
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											 <?php } ?>&nbsp;&nbsp;
										</td>
									</tr>
								</table></td>
							<td width="10%"><h5><small>NAMA BANK </td>
							<td width="30%"><table  border="1" align="left">
									<tr>
										<td><h5><i>&nbsp;&nbsp;<?php 
												if ($nama_bank <>""){
													echo $nama_bank;
												
											     }else{ ?> 
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											 <?php } ?>&nbsp;&nbsp;
										</td>
									</tr>
								</table></td>	
						</tr>
						<tr>		
							<td width="5%">&nbsp;</td>	
							<td width="10%"><h5><small>NO REKENING</td>
							<td colspan="3" align="left"><table  border="1" align="left">
									<tr>
													<?php 
												if ($nomor_rekening <>""){
													?>	
													<td><h3><b><i>&nbsp;&nbsp;<?php
													echo $nomor_rekening;
													?>&nbsp;&nbsp;
													</td>
											     <?php }else{ ?> 
														
													
													
													
													<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

												<?php } ?>	
									</tr>
								</table></td>
						</tr>
						<tr>
							<td width="5%">&nbsp;</td>
							<td width="10%"><h5><small>CABANG </td>
							<td width="30%">
							
								<table  border="1" align="left">
									<tr>
										<td><h5><i>&nbsp;&nbsp;<?php 
												if ($cabang <>""){
													echo $cabang;
												
											     }else{ ?> 
										
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											 <?php } ?>&nbsp;&nbsp;
										</td>
									</tr>
								</table></td>
							<td width="10%"><h5><small>KOTA </td>
							<td width="30%"><table  border="1" align="left">
									<tr>
										<td><h5><i>&nbsp;&nbsp;<?php 
												if ($kota <>""){
													echo $kota;
												}else{ ?> 
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											 <?php } ?>&nbsp;&nbsp;
										</td>
									</tr>
								</table></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td width="10%" colspan="4"><h5><small><i>
							<?php if ($nama_rekening <>""){ ?>
								MOHON DICEK DAN PASTIKAN KEBENARAN DATA REKENING BANK ANDA
							<?php }else{ ?>
								WAJIB MELAMPIRKAN FOTO HALAMAN DEPAN BUKU BANK ATAU REKENING KORAN DATA BANK ANDA 
							<?php } ?>	
								</td>					
						</tr>
						<tr>
							<td width="10%" colspan="5"></td>					
						</tr>
					</table>
			
					 

				</div>	
				
			</td>
			</tr>	
			<?php } ?>	
			<tr><td colspan="3"></td></tr>	
			<tr>
			<td colspan="3">
				<div class="panel panel-warning">
				<div class="panel-heading"><h5><b>PENUKARAN POINT TO CASH <br>
				UNTUK PENUKARAN POINT TO CASH HARAP ISI DATA REKENING DIBAWAH					
				</b></div>	
				<table colspan="0" cellpadding="0"width="100%">
						<tr>
							<td colspan="6"></td>					
						</tr>
						<tr class="success">
							<td width="1%">&nbsp;</td>
							
							<td width="22%" align="left"><h5><small><B>NAMA BARANG</td>
							<td width="4%" align="right"><h5><small><B>POINT</td>
							<td width="3%" align="center"><h5><small><b>QTY</td>
							<td width="1%">&nbsp;</td>
				
							<td width="22%" align="left"><h5><small><B>NAMA BARANG</td>
							<td width="4%" align="right"><h5><small><B>POINT</td>
							<td width="3%" align="center"><h5><small><b>QTY</td>
							<td width="1%">&nbsp;</td>
						</tr>
						<?php 
						$produk ="";
					
						
						$bulan = mysqli_query($trconn, "SELECT a.product_id,product_name,point FROM `mstr_program_barang` a
														INNER JOIN `ms_product` b ON a.`product_id` = b.`product_id`
														WHERE point <=".$total_point ."
														AND product_name LIKE '%POINT2CASH%'		
														Order by product_id DESC
														;
													
														") or die ("Error : " . mysqli_error());											  
						$index = 1;
						$add_point = 0;
						$red_point = 0;
						$sisa_point = 0;
						$ttl=0;
												 
						while ($row_bulan= mysqli_fetch_array($bulan, MYSQL_ASSOC)) { 
							if (($index % 2) == 1)
							{ ?>
							<tr height="15">
							<td >&nbsp;</td>
							<?php } ?>
							<td align="left"><h5><small><?php echo $row_bulan["product_name"];?>&nbsp;</td>
							<td align="right"><h5><small><?php echo number_format($row_bulan["point"]);?>&nbsp;</td>
							<td align="center">
							<table  border="1" align="center">
									<tr>
										<td>&nbsp;&nbsp;&nbsp;&nbsp;
										</td>
									</tr>
								</table>
							</td>
							
							<?php if (($index % 2) == 1)
							{ ?>
							<td >
							&nbsp;
							</td>
							<?php } ?>
							<?php if (($index % 2) == 0)
							{ ?>
							<td >
								&nbsp;	
							</td>
							</tr>
							<?php
							}
							$index++;
							}
							?>
						

						<tr>
							<td colspan="6"><br></td>					
						</tr>
					</table>
				
				</div>	
			</td>
			</tr>												
			<tr><td colspan="3"></td></tr>	
			<?php 
				$produk ="";
				?>
			<tr>
			<td colspan="3">
				<div class="panel panel-warning">
				<div class="panel-heading"><h5><b>PENUKARAN VOUCHER EWALLET	
				</b></div>	
				<table colspan="0" cellpadding="0" border="0" width="100%">
						<tr>
						<tr class="success">
							<td width="1%">&nbsp;</td>
							<td width="17%" align="left"><h5><small><B>NAMA BARANG</td>
							<td width="3%" align="right"><h5><small><B>POINT</td>
							<td width="20%" align="center"><h5><small><b>NOMOR HP</td>
							<td width="4%" align="center"><h5><small><b>QTY</td>
							<td width="7%" align="center"><h5><small><b>VCH</td>
							<td width="4%" align="center"><h5><small><b>QTY</td>
							<td width="7%" align="center"><h5><small><b>VCH</td>
							<td width="4%" align="center"><h5><small><b>QTY</td>
							<td width="7%" align="center"><h5><small><b>VCH</td>
							<td width="4%" align="center"><h5><small><b>QTY</td>
							<td width="6%" align="center"><h5><small><b>VCH</td>
							
						
							<td width="1%">&nbsp;</td>
						</tr>
	
						<?php 
						
						$bulan = mysqli_query($trconn, "SELECT DISTINCT a.product_id,product_name,point FROM `mstr_program_barang` a
														INNER JOIN `ms_product` b ON a.`product_id` = b.`product_id`
														WHERE point <=".$total_point ."
														AND  product_name LIKE 'VOUCHER EWALLET%'
														GROUP BY POINT	
														Order by POINT DESC
														;
													
														") or die ("Error : " . mysqli_error());											  
						$index = 1;
						$add_point = 0;
						$red_point = 0;
						$sisa_point = 0;
						$ttl=0;
												 
						while ($row_bulan= mysqli_fetch_array($bulan, MYSQL_ASSOC)) { 
							?>
							<tr height="15">
							<td >&nbsp;</td>
							<td align="left" valign="middle"><h5><small><?php 
							$posisi=strpos($row_bulan["product_name"],"-");
							$product_name = substr($row_bulan["product_name"],0,$posisi);
							$voucher_ewallet = str_replace("EWALLET","",$product_name);
							$value_ewallet = trim(str_replace("VOUCHER EWALLET @Rp. "," ",$product_name));
							
							echo $voucher_ewallet; ?></td>
							<td align="right" valign="middle"><h5><small><?php echo number_format($row_bulan["point"]);?>&nbsp;</td>
							<td align="right" valign="middle">
								<table  border="1" align="center">
									<tr>
										<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										</td>
									</tr>
								</table>
							</td>	
								
								
							<td align="center">
							<?php if (($value_ewallet=="500.000")||($value_ewallet=="400.000")||($value_ewallet=="300.000")||($value_ewallet=="200.000")||($value_ewallet=="100.000")||($value_ewallet=="50.000")||($value_ewallet=="25.000")){ ?>
							<table  border="1" align="center">
									<tr>
										<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									</tr>
								</table>
							<?php } ?>	
							</td>
							<td align="left">
							<?php if (($value_ewallet=="500.000")||($value_ewallet=="400.000")||($value_ewallet=="300.000")||($value_ewallet=="200.000")||($value_ewallet=="100.000")||($value_ewallet=="50.000")||($value_ewallet=="25.000")){ ?>
							<h5><small>&nbsp;OVO
							<?php } ?>	
							</td>
							
							<td align="center">
							<?php if (($value_ewallet=="250.000")||($value_ewallet=="200.000")||($value_ewallet=="150.000")||($value_ewallet=="100.000")||($value_ewallet=="50.000")||($value_ewallet=="25.000")){ ?>
							
							<table  border="1" align="center">
									<tr>
										<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									</tr>
								</table>
							<?php } ?>		
							</td>
							<td align="left">
							<?php if (($value_ewallet=="250.000")||($value_ewallet=="200.000")||($value_ewallet=="150.000")||($value_ewallet=="100.000")||($value_ewallet=="50.000")||($value_ewallet=="25.000")){ ?>
						
							<h5><small>&nbsp;LINK
							<?php } ?>
							</td>
							<td align="center">
							<?php if (($value_ewallet=="200.000")||($value_ewallet=="100.000")||($value_ewallet=="50.000")||($value_ewallet=="25.000")){ ?>
							<table border="1" align="center" >
									<tr>
										<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									</tr>
								</table>
							<?php } ?>	
							</td>
							<td align="left">
							<?php if (($value_ewallet=="200.000")||($value_ewallet=="100.000")||($value_ewallet=="50.000")||($value_ewallet=="25.000")){ ?>
							<h5><small>&nbsp;DANA
							<?php } ?>
							</td>
							<td align="center">
							<?php if (($value_ewallet=="150.000")||($value_ewallet=="100.000")||($value_ewallet=="50.000")||($value_ewallet=="25.000")){ ?>
							<table  border="1" align="center">
									<tr>
										<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									</tr>
								</table>
							<?php } ?>	
							</td>
							<td align="left">
							<?php if (($value_ewallet=="150.000")||($value_ewallet=="100.000")||($value_ewallet=="50.000")||($value_ewallet=="25.000")){ ?>
							<h5><small>&nbsp;GOPAY
							<?php } ?>	
							</td>
							
							
							
							
							</tr>
							
							
							<?php
							}
							$index++;
							
							?>
						<tr>
							<td colspan="6"></td>					
						</tr>
					</table>
				
				</div>	
			</td>
			</tr>
			
			<tr><td colspan="3"></td></tr>
			<tr>
			<td colspan="3">
				<div class="panel panel-warning">
				<div class="panel-heading"><h5><b>PENUKARAN VOUCHER PULSA HANYA KHUSUS UNTUK NOMOR PRA-BAYAR<br>
				FORMULIR PENUKARAN HADIAH VOUCHER PULSA HANDPHONE ( TULISKAN NOMOR HANDPHONE YANG AKAN DI ISI VOUCHER )					
				</b></div>	
				<table colspan="0" cellpadding="0"width="100%">
						<tr>
							<td colspan="6"></td>					
						</tr>
	
						<?php 
						$bulan = mysqli_query($trconn, "SELECT a.product_id,product_name,point FROM `mstr_program_barang` a
														INNER JOIN `ms_product` b ON a.`product_id` = b.`product_id`
														WHERE point <=".$total_point ."
														AND product_name LIKE 'VOUCHER PULSA%'
																	
														Order by product_id DESC
														;
													
														") or die ("Error : " . mysqli_error());											  
						$index = 1;
						$add_point = 0;
						$red_point = 0;
						$sisa_point = 0;
						$ttl=0;
												 
						while ($row_bulan= mysqli_fetch_array($bulan, MYSQL_ASSOC)) { 
							if (($index % 2) == 1)
							{ ?>
							<tr height="15">
							<td >&nbsp;</td>
							<?php } ?>
							<td align="left"><h5><small><?php echo $row_bulan["product_name"];?>&nbsp;</td>
							<td align="right"><h5><small><?php echo number_format($row_bulan["point"]);?>&nbsp;</td>
							<td align="center">
							<table  border="1" align="center">
									<tr>
										<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										</td>
									</tr>
								</table>
							</td>
							
							<?php if (($index % 2) == 1)
							{ ?>
							<td >
							&nbsp;
							</td>
							<?php } ?>
							<?php if (($index % 2) == 0)
							{ ?>
							<td >
								&nbsp;	
							</td>
							</tr>
							<?php
							}
							$index++;
							}
							?>
						

						<tr>
							<td colspan="6"></td>					
						</tr>
					</table>
				
				</div>	
			</td>
			</tr>
			
	</table>
	<!--end halaman ke dua -->		
<?php } ?>


</body>
</html>