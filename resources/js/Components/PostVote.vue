<template>

    <div
      class="flex flex-col h-full w-12 p-2 bg-gray-200 text-center rounded-l-lg">

    <UpVoteLink :slug="post.slug" :class="{'text-blue-700': post.postVotes[0] && post.postVotes[0].vote == 1}" />
<div class="p-2 my-2 bg-blue-300 rounded-md" >{{ post.votes }}</div>
    <DownVoteLink :slug="post.slug" :class="{'text-red-600': post.postVotes[0] && post.postVotes[0].vote == -1}" />




      </div>
     
  </template>
  
  <script setup>
  import { Link } from "@inertiajs/vue3";
  import UpVoteLink from "./UpVoteLink.vue";
  import DownVoteLink from "./DownVoteLink.vue";
  
  defineProps({
    post: Object,
  });
  </script>
