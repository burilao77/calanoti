<script>
    Push.create("Urgente", {
        body: "<?= $message ?>",
        icon: '../img/sopa.jpg',
        timeout: 4000,
        onClick: function () {
        window.focus();
        this.close();
    }
        
    });
</script>