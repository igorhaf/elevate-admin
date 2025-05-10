{{-- resources/views/vendor/admin/form/input_vue.blade.php --}}
<div class="mb-4">
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-700 mb-1">
        {{ $label }}
    </label>

    @include('admin::form.error')

    <div id="vue-input-{{ $id }}" class="flex items-center space-x-2">
        @if ($prepend)
            <span class="text-gray-500 text-sm">{!! $prepend !!}</span>
        @endif

        <input
            v-model="value"
            name="{{ $name }}"
            id="{{ $id }}"
            {!! $attributes !!}
            class="flex-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-sm"
        />

        @if ($append)
            <span class="text-gray-500 text-sm">{!! $append !!}</span>
        @endif

        @isset($btn)
            <span>
                {!! $btn !!}
            </span>
        @endisset
    </div>

    @include('admin::form.help-block')
</div>

<script>
    Vue.createApp({
        data() {
            return {
                value: @json(old($column, $value))
            }
        }
    }).mount('#vue-input-{{ $id }}')
</script>
