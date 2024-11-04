<form action="{{ route('executeAbsensi') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Authentication Code</label>
        <input type="text" class="form-control" id="authCode" name="auth_code">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
