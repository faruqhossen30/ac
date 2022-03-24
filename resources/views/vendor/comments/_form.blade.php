<div class="">
    <div class="card-body">
        @if ($errors->has('commentable_type'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('commentable_type') }}
            </div>
        @endif
        @if ($errors->has('commentable_id'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('commentable_id') }}
            </div>
        @endif
        <form method="POST" action="{{ route('comments.store') }}">
            @csrf
            @honeypot
            <input type="hidden" name="commentable_type" value="\{{ get_class($model) }}" />
            <input type="hidden" name="commentable_id" value="{{ $model->getKey() }}" />

            {{-- Guest commenting --}}
            @if (isset($guest_commenting) and $guest_commenting == true)
                <div class="form-group">
                    <label for="message">@lang('comments::comments.enter_your_name_here')</label>
                    <input type="text" class="form-control @if ($errors->has('guest_name')) is-invalid @endif"
                        name="guest_name" />
                    @error('guest_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="message">@lang('comments::comments.enter_your_email_here')</label>
                    <input type="email" class="form-control @if ($errors->has('guest_email')) is-invalid @endif"
                        name="guest_email" />
                    @error('guest_email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            @endif

            {{-- <div class="form-group">
                <label for="message">@lang('comments::comments.enter_your_message_here')</label>
                <textarea class="form-control @if ($errors->has('message')) is-invalid @endif" name="message" rows="3"></textarea>
                <div class="invalid-feedback">
                    @lang('comments::comments.your_message_is_required')
                </div>
                <small class="form-text text-muted">@lang('comments::comments.markdown_cheatsheet', ['url' => 'https://help.github.com/articles/basic-writing-and-formatting-syntax'])</small>
            </div> --}}
            <div id="" class="media">
                <div class="media-body">
                    <div style="display: flex; justify-content:space-between" >

                        <img class="mr-2 mt-2 img-thumbnail" style="max-height: 80px" src="{{ asset('storage/avatar/' . auth()->user()->avatar) }}" alt="">
                        {{-- <input type="text" class="mt-3" style="border: 1px solid black"> --}}
                        <textarea class="form-control my-2 @if ($errors->has('message')) is-invalid @endif" name="message" rows="3"></textarea>
                    </div>
                    <div style="text-align: right;">
                        <button type="submit" class="commentButton mb-2" >Comment</button>
                    </div>

                </div>

            </div>


        </form>
    </div>
</div>
<br />
