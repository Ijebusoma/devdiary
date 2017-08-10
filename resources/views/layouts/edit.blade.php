




{!! Form::model($record, ["url" => "update/$record->id", "method" => "PATCH"])
!!}

<?php echo Form::text('error', "{$record->error}") ?>
<?php echo Form::text('fix', "{$record->fix}") ?>

<p> {{Form::submit ('Update')}} </p>

{{Form::close ()}}




