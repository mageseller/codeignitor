<!-- Services -->
<section class="page-section" id="services">
    <div class="container">
        <form method="post" action="<?= base_url('pages/add') ?>" class="">
            <div class="form-group">
                <label for="command">Command</label>
                <input type="text" class="form-control" name="command" id="command" aria-describedby="command" placeholder="Type your command">
                <small id="command" class="form-text text-muted">Please add command in correct format.</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</section>