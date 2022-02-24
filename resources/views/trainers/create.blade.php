<!DOCTYPE html>
@extends('layouts.app')
@section('title', 'Trainers Create')
@section('content')
    <form class="form-group" method="POST" action="/trainers">
        @csrf
        <div class="form-group">
            <label for="">NOMBRE</label>
            <input type="text" name="name" class="form-cotrol">
        </div>
    <button type="submit" class="btn btn-danger">Guardar</button>
    </form>
@endsection