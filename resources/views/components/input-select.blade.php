@props(['options' => [], 'default' => 239])

<select {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!} >
    @foreach ($options as $key => $value)
    <option @selected($key==$default) value="{{ $key }}">{{ $value }}</option>
    @endforeach
</select>