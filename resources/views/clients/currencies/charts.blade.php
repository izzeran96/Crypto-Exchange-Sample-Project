@extends('layouts.master')

@section('content')
    <div class="chart">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('currencies.swap.exchange') }}" method="post">
                    <label for="first_values"></label>
                    <input type="text" value="first_values" name="first_values">
                    <label for="first_price">{{ $firstValuesPrice }}</label>
                    <label for="second_values"></label>
                    <input type="text" value="second_values" name="second_values">
                    <label for="second_price">{{ $secondValuesPrice }}</label>
                    <input type="button" value="submit" name="Exchange">                   
                </form>
            </div>
        </div>
    </div>
@endsection