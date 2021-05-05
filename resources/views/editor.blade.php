@extends('layouts.master')
@section('content')
<form class="editing-form" method="POST" action="/fsdata/edit">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <label for="system-input">Select a system here</label>
                <input type="text"
                       id="system-input"
                       class="form-control ui-widget"
                       aria-describedby="system-explanation-block"
                       placeholder="System name"
                       name="system_selection">
                <p id="system-explanation-block" class="form-text text-muted">
                    If you can't find a system here you'll have to add it to the database first
                </p>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="faction-input">Select a faction here</label>
                <input type="text"
                       id="faction-input"
                       class="form-control ui-widget"
                       aria-describedby="faction-explanation-block"
                       placeholder="Faction name"
                       name="faction_selection">
                <p id="faction-explanation-block" class="form-text text-muted">
                    If you can't find a faction here you'll have to add it to the database first or assign it to a system here
                </p>
            </div>
        </div>
        <div class="col-lg-3">
            <label for="new-influence-input">New infuence</label>
            <div class="input-group">
                <input type="number"
                       class="form-control"
                       id="new-influence-input"
                       placeholder="0"
                       aria-describedby="percentage-addon"
                       name="new_influence">
                <span class="input-group-addon" id="percentage-addon">%</span>
            </div>
            <div class="form-group">
                <label for="new-pending-state-input">New pending state</label>
                <input type="text" class="form-control" id="new-pending-state-input"
                       placeholder="New pending state" name="pending_state">
            </div>
            <div class="form-group">
                <label for="new-current-state-input">New current state</label>
                <input type="text" class="form-control" id="new-current-state-input"
                       placeholder="New current state" name="current_state">
            </div>
            <div class="form-group">
                <label for="new-recovering-state-input">New recovering state</label>
                <input type="text" class="form-control" id="new-recovering-state-input"
                       placeholder="New recovering state" name="recovering_state">
            </div>
        </div>
        <div class="col-lg-3">
            <label for="system-add-current-order-id">ID of the current given order</label>
            <input type="text"
                   id="system-add-current-order-id"
                   placeholder="Order ID"
                   aria-describedby="system-add-current-order-id-explanation"
                   name="system_add_current_order_id"
                   required>
            <p id="system-add-current-order-id-explanation" class="form-text text-muted">
                1. Do Missions for TBR <br>
                2. Trade to/from TBR controlled stations <br>
                3. Sell exploration data at TBR controlled stations <br>
                4. Bounty Hunt in TBR controlled systems <br>
                5. Participate in a conflict involving TBR <br>
                6. Participate in a conflict involving TBR <br>
            </p>
        </div>
    </div>
    <div class="row">
        <input type="submit" class="btn btn-primary" id="send-btn" value="Submit Data">
    </div>
</form>
@endsection()