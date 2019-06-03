@extends('layout.app')

@section('content')
<div class="container">
      <div class="col-lg-8">

        <h1 class="mt-5">Report an incident</h1>
    </div>
    <hr>
    <form method="POST" action="/reports">
      @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Registration number</label>
    <input name="regno" class="form-control" id="exampleFormControlInput1" value="{{ Auth::user()->reg_number}}" disabled
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1"><strong>Incident type</strong></label>
    <select class="form-control" id="exampleFormControlSelect1" name="type">
      <option selected disabled>choose...</option>
      <option>Attack</option>
      <option>Fire</option>
      <option>Theft</option>
      <option>Medical</option>
      <option>suspisions</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2"><strong>Place of incident</strong></label>
    <select class="form-control" id="exampleFormControlSelect2" name="place">
      <option selected disabled>choose...</option>
      <option>Buru Buru</option>
      <option>New Hostel</option>
      <option>Tatton</option>
      <option>Mombasa</option>
      <option>Nairobi</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1"><strong>Time slot of incident</strong></label>
    <select class="form-control" id="exampleFormControlSelect1" name="time_slot">
      <option selected disabled>choose...</option>
      <option>00hrs-05hrs</option>
      <option>05hrs-06hrs</option>
      <option>06hrs-07hrs</option>
      <option>07hrs-08hrs</option>
      <option>09hrs-10hrs</option>
      <option>10hrs-11hrs</option>
      <option>11hrs-12hrs</option>
      <option>12hrs-13hrs</option>
      <option>13hrs-14hrs</option>
      <option>14hrs-15hrs</option>
      <option>15hrs-16hrs</option>
      <option>16hrs-17hrs</option>
      <option>17hrs-18hrs</option>
      <option>18hrs-19hrs</option>
      <option>19hrs-20hrs</option>
      <option>20hrs-00hrs</option>
    </select>
  </div>
  <div class="form-group"> 
    <label for="exampleFormControlTextarea1"><strong>Description </strong><i>(eg if theft, what was stolen and how.)</i></label>
    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group col-md-2" id="sendbutton">
    <button type="submit" class="btn btn-primary btn-block">Send</button>
    </div>
</form>
</div>
@endsection