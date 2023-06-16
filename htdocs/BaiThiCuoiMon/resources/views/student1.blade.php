@extends('layout.student')

@section('title_page')

home page

@endsection

@section('mycss')

@endsection

@section('body_content')
<style>    
h2{
  margin-left: 38%;
  font-size:300%;
}
* {    
  box-sizing: border-box;    
}    
    
input[type=text], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
input[type=email], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
    
label {    
  padding: 12px 12px 12px 0;    
  display: inline-block;    
}    
    
input[type=submit] {    
  background-color: rgb(37, 116, 161);    
  color: white;    
  padding: 20px 50px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
  margin: 1% 45%;   
  font-weight: bold;
  font-size: 120%;
}    
    
input[type=submit]:hover {    
  background-color:cadetblue;    
  color: black;
}    
    
.container {    
  border-radius: 5px;    
  background-color: #f2f2f2;    
  padding: 20px;    
}    
    
.col-25 {    
  float: left;    
  width: 15%;    
  margin-top: 6px;    
  font-weight: bold;
  font-size: 120%;
}    
    
.col-75 {    
  float: left;    
  width: 75%;    
  margin-top: 6px;    
  font-weight: bold;
}    
    
/* Clear floats after the columns */    
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
}    
    
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */    
</style>  
<h2> F E E D B A C K  </h2>    
<div class="container">    
  <form method="POST" action="/student">    
     
   @csrf
      <div class="row">    
        <div class="col-25">    
          <label for="email">Ten_mon</label>    
        </div>    
        <div class="col-75">    
          <select class="form-control" id="ccmonth" name="Ten_mon">
                              
            <option value="" selected disabled>--Please select name class--</option>
            @foreach($data  as $row)
            <option value="{{ $row->ID_monhoc }}">{{ $row->Ten_monhoc }}</option>
            @endforeach 
        </select>   
        </div>    
      </div> 
      <div class="row">    
        <div class="col-25">    
          <label for="email">Ten sinh vien</label>    
        </div>    
        <div class="col-75">    
          <select class="form-control" id="ccmonth" name="sinh_vien">
                              
            <option value="" selected disabled>--Please select name student--</option>
            @foreach($data2  as $row)
            <option value="{{ $row->Id_student}}">{{ $row->First_name }} {{ $row->Last_name }}</option>
            @endforeach 
        </select>   
        </div>    
      </div>
    <div class="row">    
      <div class="col-25">    
        <label for="feed_back">Feedback</label>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="subject" placeholder="Write here.." style="height:200px"></textarea>    
      </div>    
    </div>    
    <div class="row">    
      <input type="submit" value="Submit">    
    </div>    
  </form>    
</div>    

@endsection

@section('myscript')

@endsection