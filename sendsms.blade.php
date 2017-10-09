@extends('layouts.app')
@section('content')
<style type="text/css">
  .agroup{
    margin-right: 10px;
  }
</style>
<div >
  <form action="{{ url('/createsendsms') }}" method="post" accept-charset="utf-8">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="card">
          <h4 class="card-header">Create your SMS </h4>
          <div class="card-body">
            <div class="form-group">
              <fieldset disabled>
                <div class="form-group">
                  <label for="disabledTextInput">Sender ID</label>
                  <input type="text" id="disabledTextInput" class="form-control" placeholder="VM-IMMNEOS">
                </div>
              </fieldset>
              <div class="form-group">
                <label for="numbers">Enter mobile numbers here</label>
                <textarea class="form-control" id="numbers" name="numbers" placeholder="Select number">
                </textarea>
                <p >
                  <span class="float-right">365 : Numbers</span>
                  <span id="group_selected" ></span>
                </p>
              </div>
                  <textarea style="display:none;" name="group_selected_input" id="group_selected_input" ></textarea>
              <div class="form-group">
                <label for="message">Type your message here </label>
                <textarea class="form-control" name="message" id="message" rows="3"></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Send SMS</button>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg=6">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Groups</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <ul class="list-group">
              <div class="">
                <div class="input-group no-radius">
                  <input type="text" class="form-control no-radius" placeholder="Search for..." aria-label="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary no-radius" type="button">Go!</button>
                  </span>
                </div>
              </div>
              <li class="list-group-item bg-primary "> <input type="checkbox" class="form-check-input"> All contacts <span class="float-right"><a href="#" class="text-light">Add New Contact</a></span></li>
              @foreach ($contacts as $item)
              <li class="list-group-item"><span>
                <input type="checkbox" name="" id="{{$item->number}}" onclick="contactCheck({{$item->number}})" class="form-check-input">
              </span> {{ $item->name }}</li>
              @endforeach
            </ul>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="">
              <div class="input-group no-radius">
                <input type="text"  class="form-control no-radius" placeholder="Search for..." aria-label="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary no-radius" type="button">Go!</button>
                </span>
              </div>
            </div>
            <ul class="list-group">
              <li class="list-group-item  bg-primary"> <input type="checkbox" class="form-check-input"> All Groups <span class="float-right"><a href="#" class="text-light">Add New Group</a></span></li>
              @foreach ($groups as $item)
              <li class="list-group-item"><span> <input type="checkbox" id="{{$item->id}}" onclick="groupCheck({{$item->id}},'{{$item->groupname}}')" class="form-check-input"> </span> {{ $item->groupname }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript">
var contacts = []
var groups = []
var groups_Id = []
var str;
function contactCheck(itemId) {
  var c = document.getElementById(itemId);
  if (c.checked) {
    contacts.push(itemId);

  }else{
  var index = contacts.indexOf(itemId);
  for (var i = contacts.length-1; i >= 0; i--) {
    if (contacts[i] === itemId) {
      contacts.splice(i, 1);
    }
  }
}
document.getElementById("numbers").value = contacts.join(',');
}
function groupCheck(itemId,itemName) {
  var c = document.getElementById(itemId);
  if (c.checked) {
    groups.push(itemName);
    groups_Id.push(itemId);

  }else{
  // var index = groups.indexOf(itemName);
  for (var i = groups.length-1; i >= 0; i--) {
    if (groups[i] === itemName) {
      groups.splice(i, 1)
    }
    if (groups_Id[i] === itemId) {
      groups_Id.splice(i, 1)
    }
  }
}
document.getElementById("group_selected_input").innerHTML = groups_Id.join(',');
str = '';
if (groups.length == 0) {
  str = '';document.getElementById("group_selected").innerHTML =  str;
}
for (var i = 0; i < groups.length; i++) {
  str += "<a class='badge badge-secondary agroup' >"+groups[i]+"</a>";
  document.getElementById("group_selected").innerHTML =  str;
}
}
</script>
@endsection