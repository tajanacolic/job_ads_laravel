<form style="padding-top: 100px" method="post">
    @csrf
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                @error('job_title')
                    <div>  {{ $message }} </div>
                @enderror
                @error('job_type')
                    <div>  {{ $message }} </div>
                @enderror
                @error('job_location')
                    <div>  {{ $message }} </div>
                @enderror
                @error('job_requirements')
                    <div>  {{ $message }} </div>
                @enderror
                @error('job_description')
                    <div>  {{ $message }} </div>
                @enderror
            </div>
        @endif
        <div class="col-25">
            <label>Job title</label></div>
        <div class="col-75">
            <input type="text" name="job_title" placeholder="Eg. Software developer" value="{{ old('job_title') }}">
            
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label>Job Type</label>
        </div>
        <div class="col-75">
            <input type="text" name="job_type" placeholder="Eg. Full time" value="{{ old('job_type') }}">
            
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label>Job location</label>
        </div>
        <div class="col-75">
            <input type="text" name="job_location" placeholder="Eg. Bosnia and Herzegovina" value="{{ old('job_location') }}">
            
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="subject">Job position requirements</label>
        </div>
        <div class="col-75">
            <textarea name="job_requirements" placeholder="This job position requires..." style="height:200px">{{ old('job_requirements') }}</textarea>
            
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="subject">Job description</label>
        </div>
        <div class="col-75">
            <textarea name="job_description" placeholder="Write something..." style="height:200px">{{ old('job_description') }}</textarea>
            
        </div>
    </div>
    <br>
    <div class="row">
        <input type="submit" value="Create">
    </div>
</form>