<template>
     <Link 
     :href="route('posts.upVote', slug)"
     method="post"
     as="button"
     type="button"
     class="text-gray-400 hover:text-blue-500 my-2 flex justify-center"
      preserve-scroll>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75L12 3m0 0l3.75 3.75M12 3v18" />
</svg>

</Link>
  </template>
  
  <script setup>
  import { Link } from "@inertiajs/vue3";
  
  defineProps({
    slug: String,
  });
  </script>