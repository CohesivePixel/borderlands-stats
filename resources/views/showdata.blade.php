@extends('layouts.master')

@section('content')
    {{--<div class="col-lg-6">--}}
        {{--<div id="bgs-container" class="form-group well">--}}
            {{--<p>--}}
                {{--Status update for 17 July 3303 <br>--}}
                {{--<br>--}}
                {{--41 Upsilon- 4 Eridani <br>--}}
                {{--<br>--}}
                {{--41 Upsilon-4 Eridani Assembly = 13% (+0%) Famine, (R) Outbreak <br>--}}
                {{--41 Upsilon-4 Eridani Legal Industries = 6% (+0%) <br>--}}
                {{--Revolutionary Party of 41 Upsilon-4 Eridani = 60% (+0%) Outbreak <br>--}}
                {{--41 Upsilon-4 Eridani Allied Partners = 3% (+0%) (P) Outbreak (R) Famine <br>--}}
                {{--41 Upsilon-4 Eridani Liberty Party = 6% (+0%) Outbreak <br>--}}
                {{--The Borderlands Republic = 8% (+0%)(edited) <br>--}}
            {{--</p>--}}
        {{--</div>--}}
    {{--</div>--}}
    @foreach($systems as $system)
        <div class="col-lg-6">
            <div id="bgs-container" class="form-group well">
                <p>
                    Status update for 17 July 3303 <br>
                    <br>
                    {{ $system->system_name }} <br>
                    <br>
                    @foreach($fsdlist as $fsditem)
                        @if($fsditem->fsd_system_id === $system->system_id)
                            @foreach($factions as $faction)
                                @if($faction->faction_name === $fsditem->fsd_contains_faction_name)
                                    {{ $fsditem->fsd_contains_faction_name }}=
                                    {{$fsditem->fsd_faction_influence }}%
                                    @if($fsditem->fsd_faction_influence >= $fsditem->fsd_faction_previous_influence)
                                        {{ "(+" }}
                                    @else
                                       {{ "(-" }}
                                    @endif
                                    <?=abs($fsditem->fsd_faction_previous_influence - $fsditem->fsd_faction_influence)?>{{ "%)" }},
                                    {{ $faction->faction_current_state }} <br>
                                @endif
                            @endforeach()
                        @endif
                    @endforeach
                </p>
            </div>
        </div>
    @endforeach()
@endsection()