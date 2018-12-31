<div class="form-group">
        <label for="subject" class="col-sm-2 control-label">Subject</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" value="{{ @$task->subject }}">
        </div>
    </div>
    <div class="form-group">
      <label for="made" class="col-sm-2 control-label">Executada</label>
      <div class="col-sm-10">
        <select type="text" name="made" id="made" class="form-control">
            <option value="0" {{ @$task->made ? '' : 'selected' }}>Não</option>
            <option value="1" {{ @$task->made ? '' : 'selected' }}>Sim</option>
        </select>
      </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-sm-2 control-label">Idade</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="description" name="description" placeholder="Descrição">
                {{ @$task->description }}
            </textarea>
        </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Salvar</button>
      </div>
    </div>

