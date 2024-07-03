<div class="px-5 pt-4 content">
    Check the {{ $category }} for the city you like to visit:
    <select class="form-select venue-city mt-3">
        <option value="" selected>City . . .</option>
        @foreach ($cities as $city)
            <option value="{{ $city }}">{{ $city }}</option>
        @endforeach
    </select>
    <div class="px-5 pt-4 table-container">
        <table id='venue-table'>

        </table>
    </div>
</div>