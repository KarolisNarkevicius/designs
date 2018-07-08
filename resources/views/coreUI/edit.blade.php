<div class="card">
    <div class="card-header">
        Card heading
    </div>

    <div class="card-body">
        <form role="form">
            <!-- text input -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" value="{{ $name }}">
            </div>
            <div class="form-group">
                <label for="user_id">User</label>
                <select name="user_id" id="user_id" class="select2 form-control">
                    @foreach($users as $user)
                        <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="users">
                    Users
                    <span class="btn btn-info btn-xs" id="select-all-users">Select all</span>
                    <span class="btn btn-info btn-xs" id="deselect-all-users">Deselect all</span>
                </label>
                <select name="users[]" id="users" class="form-control select2" multiple="multiple">
                    @foreach($users as $user)
                        <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="textarea">Textarea</label>
                <textarea class="form-control " placeholder="" name="textarea" cols="50" rows="10"
                          id="textarea"></textarea>
            </div>

            <div class="form-group">
                <label>Radio</label>
                <div>
                    <input name="radio" type="radio" value="1" id="radio_1">
                    <label for="radio_1">On</label>
                </div>
                <div>
                    <input name="radio" type="radio" value="0" id="radio_0">
                    <label for="radio_0">Off</label>
                </div>
            </div>

            <div class="form-group">
                <input name="checkbox" type="checkbox" value="1" id="checkbox">
                <label for="checkbox">Checkbox</label>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input class="form-control date" name="date" type="text" id="date">
            </div>

            <div class="form-group">
                <label for="datetime">Date/time</label>
                <input class="form-control datetime" name="datetime" type="text" id="datetime">
            </div>

            <div class="form-group">
                <label for="time">Time</label>
                <input class="form-control timepicker" name="time" type="text" id="time">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" name="password" type="password" id="password">
            </div>

            <div class="form-group">
                <label for="number">Number</label>
                <input class="form-control" name="number" type="number" id="number">
            </div>

            <div class="form-group">
                <label for="money">Money</label>
                <input class="form-control" name="money" type="number" id="money">
            </div>

            <div class="form-group">
                <label for="float">Float</label>
                <input class="form-control" name="float" type="text" id="float">
            </div>

            <div class="form-group">
                <label for="enum">Enum</label>
                <select name="enum" id="enum" class="select2 form-control">
                    @foreach($enums as $enum)
                        <option value="{{ $enum }}">{{ $enum }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control">
            </div>


        </form>
    </div>
</div>

@section('scripts')
    @parent

    <script>

        //BELONGS-TO
        $(document).ready(function () {
            $('.select2').select2();
        });

        //BELONGS - TO - MANY
        $(document).ready(function () {
            $('.select2').select2();
        });
        $("#select-all-users").click(function () {
            $("#users > option").prop("selected", "selected");
            $("#users").trigger("change");
        });
        $("#deselect-all-users").click(function () {
            $("#users > option").prop("selected", "");
            $("#users").trigger("change");
        });

        //DATE/TIME
        moment.updateLocale('en', {
            week: {dow: 1} // Monday is the first day of the week
        });
        $('.date').datetimepicker({
            format: "YYYY-MM-DD",
            locale: "en",
        });
        $('.datetime').datetimepicker({
            format: "YYYY-MM-DD HH:mm:ss",
            locale: "en",
            sideBySide: true,
        });
        $('.timepicker').datetimepicker({
            format: "HH:mm:ss",
        });


    </script>
@endsection