@extends('utama')
@section('judul_halaman', 'Tiket')
@section('konten')
<div class="container">
    <h2 class="mt-4 mb-4 text-center">TIKET</h2>
    
    <style>
      .feedback {
  position: absolute;
  opacity: 0;
}

.table {
  display: table;
  width: 100%;
  position: absolute;
  height: 100%;
}

.table-cell {
  display: table-cell;
  vertical-align: middle;
}

#ticket {
  width: 350px;
  background: #fff;
  height: 470px;
  margin: 0 auto;
}
#ticket:after {
  content: "";
  display: block;
  position: relative;
  clear: both;
}

#ticket > .row:first-child:before, #ticket > .row:first-child:after {
  background-color: #28334A;
  position: absolute;
  content: "";
  display: block;
  width: 20px;
  height: 20px;
  border-radius: 100%;
  bottom: 0;
  margin-bottom: -10px;
}
#ticket > .row:first-child:before {
  left: 0;
  margin-left: -10px;
}
#ticket > .row:first-child:after {
  right: 0;
  margin-right: -10px;
}

.logo {
  width: 160px;
}

.row {
  position: relative;
  padding: 20px;
}
.row.perforated {
  border-bottom: 1px dashed #ddd;
}
.row.destinations:after, .row.normRow:after {
  content: "";
  clear: both;
  display: block;
}

.label {
  font-size: 10px;
  font-weight: bold;
  text-transform: uppercase;
  line-height: 1.2 !important;
}

.airport {
  font-size: 32px;
}

.city {
  font-size: 12px;
  text-transform: uppercase;
}

.right {
  float: right;
  text-align: right;
}

.left {
  float: left;
  text-align: left;
}

svg#plane {
  width: 30px;
  position: absolute;
  left: 50%;
  margin-left: -15px;
  margin-top: 15px;
  opacity: 0.5;
  display: inline-block;
}

.smalltext {
  padding: 20px;
  font-size: 10px;
  opacity: 0.6;
}

.col6 {
  float: left;
  width: 50%;
  font-size: 21px;
  line-height: 1.5;
}

.col {
  font-size: 21px;
}

.normRow {
  padding-bottom: 0;
}

#qr {
  float: right;
  width: 80px;
  position: relative;
  right: -5px;
  bottom: 5px;
  margin-left: 10px;
}

.sparkler {
  width: 70px;
  height: 70px;
  float: left;
  margin-right: 20px;
}
.sparkler .square {
  width: 12.5%;
  height: 12.5%;
  background-color: grey;
  float: left;
  transition: background-color 0.1s;
}
    </style>
        <div class="feedback" id="oldX"></div><div class="feedback" id="oldY"></div>
    <div class="table">
      <div class="table-cell">
        <div id="ticket">
          <div class="row perforated first">
            <img class="logo" src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e0/United_Airlines_Logo.svg/1024px-United_Airlines_Logo.svg.png" />
            <div class="right">
              <div class="label">Flight Number</div>
              <div class="num">UA 1136</div>
            </div>
          </div>
          <div class="row perforated destinations">
            <div class="left">
              <div class="label">Departing</div>
              <div class="airport">ORD</div>
              <div class="city">Chicago, IL</div>
            </div>

            <svg id="plane" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve">
              <g>
                <path d="M12.5,50L6.25,31.25h6.25L25,43.75h25L31.25,6.25h6.25l31.25,37.5h12.5c0,0,12.5,0,12.5,6.25s-12.5,6.25-12.5,6.25h-12.5   L37.5,93.75h-6.25L50,56.25H25l-12.5,12.5H6.25L12.5,50z" />
              </g>
            </svg>

            <div class="right">
              <div class="label">Arriving</div>
              <div class="airport">PDX</div>
              <div class="city">Portland, OR</div>
            </div>
          </div>
          <div class="row normRow">
            <div>
              <div class="label">Passenger</div>
              <div class="col">Andrew P Vosburg</div>
            </div>
            
          </div>
          <div class="row normRow">
            <div class="col6">
              <div class="label">Departs in</div>
              <div class="countdown">---</div>
            </div>
            <div class="col6">
              <div class="label">Gate</div>
              <div>D26</div>
            </div>
          </div>
          <div class="row normRow">
          
            <div class="col6">
              <div class="label">Departs at</div>
              <div>8:00am</div>
            </div>
            <div class="col6">
              <div class="label">Arrives at</div>
              <div>10:35am</div>
            </div>
            
          </div>
          <div class="row">
            <div class="sparkler"></div>
          <img id="qr" src='https://chart.googleapis.com/chart?cht=qr&chl=UA%201136%2098745-34538459&chs=180x180&choe=UTF-8&chld=L|2' alt=''><div class="smalltext">Hologram must change when moving device for ticket to be valid</div>
          </div>
        </div>
      </div>
    </div>

</div>

@endsection