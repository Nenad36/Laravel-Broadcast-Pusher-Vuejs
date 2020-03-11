<template>
    <li class="list-group-item" :class="className">
        <div class="chat-body white p-3 ml-2 z-depth-1">
            <div class="header">
                <strong class="badge" :class="badgeClass">{{ user }}</strong>
                <small class="pull-right text-muted"><i class="far fa-clock"></i> {{ time }}</small>
            </div>
            <hr class="w-100">
            <p class="mb-0">
               <slot></slot>
            </p>
        </div>
    </li>
</template>

<script>
    export default {
        name: "Message",
        props: [
            'color',
            'user',
            'time'
        ],
        computed: {
            className() {
                return 'list-group-item-'+this.color;
            },
            badgeClass() {
                return 'badge-'+this.color;
            }
        }
    }
</script>

<style scoped>

</style>
