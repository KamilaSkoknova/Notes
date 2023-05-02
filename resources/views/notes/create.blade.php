<x-app-layout>
    <div class="container">
        <div class="notes-where">
            <div class="row">
                <div class="col-12 d-flex justify-content-between">
                    <h4>Create New Note</h4>
                    <a href="{{ route('notes.index') }}" class="btn btn-dark text-right">Back to list</a>
                </div>
                <div class="col-12 mt-5">
                    <form action="{{ route('notes.store') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" /> <!-- @csrf -->
                        @error('title')
                            {{ $message }}
                        @enderror
                        <input type="text" name="title" placeholder="(Maximum: 120 chars) Title" class="form-control mb-2">
                        @error('perex')
                            {{ $message }}
                        @enderror
                        <textarea rows="3" name="perex" placeholder="Perex or main point" class="form-control mb-2"></textarea>
                        @error('description')
                            {{ $message }}
                        @enderror
                        <textarea rows="5" name="description" placeholder="Description or more details" class="form-control mb-2"></textarea>
                        <button type="submit" class="btn btn-form px-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


