@extends('utama')
@section('judul_halaman', 'List Pertandingan')
@section('konten')

<div class="container">
    <h2 class="mt-4 text-center">Health Monitor</h2>
    <a href="{{ url('health') }}" class="btn btn-primary">Menu Health</a>
    <div class="row my-4">
        <div class="col-md-6">

            <form name="createhealth" id="createhealth" method="post" enctype="multipart/form-data" action="{{url('/health/monitor')}}">
                {{ csrf_field() }}

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="form-group mb-2">
                    <label for="date">Tanggal Input</label>
                    <input type="date" name="date" id="inputdate" class="form-control">
                </div>

                <div class="form-group mb-2">
                <label for="inputspo2">SPO2</label>
                <input type="number" id="inpuspo2" name="spo2" class="form-control" min="0" max="100" required="">
                </div>

                <div class="form-group mb-2">
                <label for="inputbpm">BPM</label>
                <input type="number" id="inputbpm" name="bpm" class="form-control" min="0" max="200" required="">
                </div>

                <div class="form-group mb-2">
                    <label for="inputdiabetes">Diabetes</label>
                    <input type="number" name="diabetes" id="inputdiabetes" class="form-control" min="0" max="200" required="">
                </div>

                <div class="form-group mb-2">
                    <label for="inputtemperature">Temperature (C)</label>
                    <input type="number" name="temperature" id="inputtemperature" class="form-control" min="0" max="43" required="" >
                </div>

                <div class="form-group mb-2">
                    <label for="inputbloodpress">Blood Pressure</label>
                    <input type="number" name="bloodpress" id="inputbloodpress" class="form-control" min="0" max="200" required="" placeholder="Systolic">
                    <input type="number" name="bloodpress2" id="inputbloodpress2" class="form-control" min="0" max="200" required="" placeholder="Diastolic">
                </div>

                <div class="form-group mb-2">
                    {{-- <input type="hidden" id="inputscore" name="score" class="form-control" required=""> --}}
                    <input type="hidden" name="score" value="temperature">
                    </div>




      <div class="d-flex">
        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
            </form>
  </div>
</div>
</div>

@endsection
