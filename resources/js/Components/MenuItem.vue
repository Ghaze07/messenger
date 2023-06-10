<template>
    <a
        href="javascript:void(0)"
        class="flex items-center space-x-3 rounded-l border-l-4 border-indigo-500 bg-white px-3 py-4 shadow-sm"
    >
        <div class="relative flex-none">
            <img
                src="https://images.unsplash.com/photo-1567186937675-a5131c8a89ea?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=160&ixid=MXwxfDB8MXxhbGx8fHx8fHx8fA&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=160"
                alt="User Avatar"
                class="h-11 w-11 rounded-full border-2 border-white/50"
            />
            <span
                class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-emerald-500 shadow-sm"
            ></span>
        </div>
        <div class="grow">
            <p class="mb-0.5 line-clamp-1 text-sm font-bold">John Smith</p>
            <p class="line-clamp-1 text-xs font-medium text-slate-500">
                j.smith@example.com
            </p>
        </div>
        <div class="flex-none self-start">
            <p class="text-xs font-medium text-slate-400">Now</p>
        </div>
    </a>
</template>
