<div class="form-group">
                        <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="fname" id="nom" placeholder="first name" value="{{ old('nom') }}">
                        @error('nom')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    ghfhgfhgfhgfh