@extends('master')
@section('content')
  <ul class="forms">
    <li><a href="/idd"><i class="fas fa-file-contract"></i> <p>IDD</p></a></li>
    <li><a href="/ff"><i class="fas fa-file-signature"></i> <p>FF</p></a></li>
    <li><a href="/sutability"><i class="fas fa-clipboard-check"></i> <p>Sutability</p></a></li>
    <li><a href="/fee-agreement"><i class="fas fa-handshake"></i> <p>Fee Agreement</p></a></li>
  </ul>
  <style type="text/css">
ul.forms {
    list-style: none;
    padding: 0;
    text-align: center;
}
ul.forms li {
    width: 200px;
    display: inline-block;
    border: 1px solid #ccc;
    height: 200px;
    margin-right: 20px;
    margin-bottom: 20px;
    background: #003468;
    position: relative;
}
ul.forms li:hover {
    background: #68BDD8;
}
ul.forms li a {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    margin: auto;
    text-align: center;
    color: #fff;
    text-decoration: none;
    font-size: 19px;
    font-weight: bold;
    padding-top: 46px;
}  
ul.forms li .fas {
    font-size: 62px;
}
  </style>
@endsection