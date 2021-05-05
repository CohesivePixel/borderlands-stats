@extends('layouts.master')

@section('content')
    <form class="editing-form" method="POST" action="/system/add">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-4">
                <label for="system-add-name">System Name</label>
                <input type="text"
                       id="system-add-name"
                       class="form-control"
                       placeholder="System name"
                       name="system_add_name"
                       required>
                <p id="system_add_name_explanation" class="text-muted">
                    50 Characters max.
                </p>
            </div>
            <div class="col-lg-4">
                <label for="system-add-star-class">Star Class</label>
                <input type="text"
                       id="system-add-star-class"
                       class="form-control"
                       placeholder="Star class"
                       name="system_add_star_class"
                       required>
                <p id="system_add_name_explanation" class="text-muted">
                    3 Characters max.
                </p>
            </div>
            <div class="col-lg-4">
                <label for="system-add-industry-type">Economy Type</label>
                <input type="text"
                       id="system-add-industry-type"
                       class="form-control"
                       placeholder="Economy type"
                       name="system_add_industry_type"
                       required>
                <p id="system_add_name_explanation" class="text-muted">
                    15 Characters max.
                </p>
            </div>
        </div>
        <div class="row">
            <input type="submit" class="btn btn-primary" id="send-btn" value="Add System">
        </div>
    </form>
@endsection()