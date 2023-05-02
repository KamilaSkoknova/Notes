<x-app-layout>
    <div class="container">
        <div class="notes-where">
            <div class="row">
                <div class="col-12 d-flex justify-content-between">
                    <h4>Note editing...</h4>
                    <a href="{{ route('notes.index') }}" class="btn btn-dark text-right">Back to list</a>
                </div>
                <div class="col-12 mt-5">
                    <form action="{{ route('notes.update', $note) }}" method="POST">
                        @method('put')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" /> <!-- @csrf -->
                        @error('title')
                            {{ $message }}
                        @enderror
                        <textarea rows="1" name="title" class="form-control mb-2">{{ $note->title }}</textarea>
                        @error('perex')
                            {{ $message }}
                        @enderror
                        <textarea rows="3" name="perex" class="form-control mb-2">{{ $note->perex }}</textarea>
                        @error('description')
                            {{ $message }}
                        @enderror
                        <textarea rows="5" name="description" class="form-control mb-2">{{ $note->description }}</textarea>
                        <button type="submit" class="btn btn-form px-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


