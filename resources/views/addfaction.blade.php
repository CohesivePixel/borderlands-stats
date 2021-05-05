@extends('layouts.master')

@section('content')
    <form class="editing-form" method="POST" action="/faction/add">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-2">
                <label for="faction-add-name">Faction Name</label>
                <input type="text"
                       id="faction-add-name"
                       class="form-control"
                       placeholder="Faction name"
                       name="faction_add_name"
                       aria-describedby="faction-add-name-explanation"
                       required>
                <p id="faction-add-name-explanation" class="text-muted">
                    50 Characters max.
                </p>
            </div>
            <div class="col-lg-2">
                <label for="faction-add-pending-state">Pending State</label>
                <input type="text"
                       id="faction-add-pending-state"
                       class="form-control"
                       placeholder="Pending state"
                       name="faction_add_pending_state"
                       required>
                <p id="faction-add-pending-state-explanation" class="text-muted"></p>
            </div>
            <div class="col-lg-2">
                <label for="faction-add-current-state">Current State</label>
                <input type="text"
                       id="faction-add-current-state"
                       class="form-control"
                       placeholder="Current state"
                       name="faction_add_current_state"
                       required>
                <p id="faction-add-current-state-explanation" class="text-muted"></p>
            </div>
            <div class="col-lg-2">
                <label for="faction-add-recovering-state">Recovering State</label>
                <input type="text"
                       id="faction-add-recovering-state"
                       class="form-control"
                       placeholder="Recovering state"
                       name="faction_add_recovering_state"
                       required>
                <p id="faction-add-recovering-state-explanation" class="text-muted"></p>
            </div>
            <div class="col-lg-2">
                <label for="faction-add-home-system">Home System</label>
                <input type="text"
                       id="faction-add-home-system"
                       class="form-control ui-widget"
                       placeholder="Home system"
                       name="faction_add_home_system"
                       required>
                <p id="faction-add-home-system-explanation" class="text-muted">
                    It's important that you type an existing system name here
                </p>
            </div>
        </div>
        <div class="row">
            <input type="submit" class="btn btn-primary" id="send-btn" value="Add Faction">
        </div>
    </form>
@endsection()