<template>
    <div class="comments">
        <ul>
            <li v-for="comment in comments">
                {{comment.text}}
                <time>{{comment.createdAt}}</time>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "comments",
        props:["comments"]
    }
</script>
