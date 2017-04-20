<?php ob_start() ?>

<section id="content">
    <div class="container c-boxed">
        <div class="c-header">
            <h2>Calendar <small>FullCalendar is a jQuery plugin that provides a full-sized, drag & drop event calendar like the one below.</small></h2>
        </div>

        <div id="calendar" class="card"></div>

        <!-- Add event -->
        <div class="modal fade" id="addNew-event" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add an Event</h4>
                    </div>
                    <div class="modal-body">
                        <form class="addEvent" role="form">
                            <div class="form-group">
                                <label for="eventName">Event Name</label>
                                <div class="fg-line">
                                    <input type="text" class="input-sm form-control" id="eventName" placeholder="eg: Sports day">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="eventName">Tag Color</label>
                                <div class="event-tag">
                                    <span data-tag="palette-Teal bg" class="palette-Teal bg selected"></span>
                                    <span data-tag="palette-Red bg" class="palette-Red bg"></span>
                                    <span data-tag="palette-Pink bg" class="palette-Pink bg"></span>
                                    <span data-tag="palette-Blue bg" class="palette-Blue bg"></span>
                                    <span data-tag="palette-Lime bg" class="palette-Lime bg"></span>
                                    <span data-tag="palette-Green bg" class="palette-Green bg"></span>
                                    <span data-tag="palette-Cyan bg" class="palette-Cyan bg"></span>
                                    <span data-tag="palette-Orange bg" class="palette-Orange bg"></span>
                                    <span data-tag="palette-Purple bg" class="palette-Purple bg"></span>
                                    <span data-tag="palette-Gray bg" class="palette-Grey bg"></span>
                                    <span data-tag="palette-Black bg" class="palette-Black bg"></span>
                                </div>
                            </div>

                            <input type="hidden" id="getStart" />
                            <input type="hidden" id="getEnd" />
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm" id="addEvent">Add Event</button>
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantillabase.php"; ?>