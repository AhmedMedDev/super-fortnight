<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
</div>
@push('js')
    <script>
        const add_to_cart = (product_id) => {
            @this.call('add_to_cart', product_id)
        }
    </script>
@endpush