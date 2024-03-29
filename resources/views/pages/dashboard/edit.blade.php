<form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Student Name</span>
                <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Student Image</span>
                <input type="file" name="student_image" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Student Age</span>
                <input type="integer" name="age" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <span class="input-group-text">Status
                <div class="form-check form-check-inline status">
                    <input class="form-check-input" name="status" type="radio"  id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Active</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="status" type="radio"  id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Inactive</label>
                </div>
            </span>
        </div>
        <div class="col-lg-4">
            <button type="submit" class="btn btn-outline-primary submit">Submit</button>
        </div>
    </div>
</form>
