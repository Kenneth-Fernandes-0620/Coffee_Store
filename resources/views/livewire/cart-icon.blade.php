<div class="flex items-center justify-center h-full m-2"
    x-init="$wire.cartCount = (cart.length == 0)?0:cart[0].value ;$watch('cart',(val)=>{$wire.cartCount = val[0].value})">
    <div class="relative z-0 flex items-center h-full m-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z"
                :fill="(message == 'dark') ? '#fff' : '#000'" />
        </svg>
        <div class="absolute inset-0 z-10 flex items-start justify-end pt-2">
            <p class="px-1 text-xs text-white bg-blue-500 border-black rounded-full badge badge-danger">
                {{ $cartCount }}
            </p>
        </div>
    </div>
</div>
