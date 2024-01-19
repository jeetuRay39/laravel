<div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{$label}}</label>
                <input type="{{$type}}" placeholder="enter your username" class="form-control" name="{{$name}}" 
                    aria-describedby="emailHelp">
                    {{-- <span class="text-danger">
                        @error('username')
                        {{$message}}
                            
                        @enderror
                        value="{{old('name')}}
                    </span> --}}
 
            </div>
</div>