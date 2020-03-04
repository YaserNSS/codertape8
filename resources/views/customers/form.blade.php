
        <div class="form-group pb-2">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') ?? $customer->name}}" class="form-control">
            <div>{{$errors->first('name')}}</div>
        </div>


        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') ?? $customer->email}}" class="form-control">
            <div>{{$errors->first('email')}}</div>
        </div>


        <div class="form-group">
                <label for="active">Status</label>
                <select name="active" class="form-control">
                    <option value="" disabled>Select Customer Status</option>
                    @foreach ($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
                        <option value="{{$activeOptionKey}}" {{$customer->active==$activeOptionValue ? 'selected':''}} >{{$activeOptionValue}}</option>
                    @endforeach

                </select>
        </div>

        <div class="form-group">
                <label for="company_id">Company</label>
                <select name="company_id" class="form-control">
                    @foreach ($companies as $company)
                        <option value="{{$company->id}}" {{$company->id == $customer->company_id ? 'selected' : ''}}>{{$company->name}}</option>
                    @endforeach
                </select>
        </div>
        @csrf
