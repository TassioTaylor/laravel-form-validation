{{ csrf_field() }}
<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" name="name" value="{{old('name',$client->name)}}">
</div>
<div class="form-group">
    <label for="document_number">CNPJ/CGC</label>
    <input type="text" class="form-control" id="document_number" name="document_number" value="{{old('document_number',$client->document_number)}}">
</div>
<div class="form-group">
    <label for="data_birth">Data Nasc.</label>
    <input type="date" class="form-control" id="data_birth" name="data_birth" value="{{old('data_birth',$client->date_birth)}}">
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" value="{{old('email',$client->email)}}">
</div>
<div class="form-group">
    <label for="">Telefone</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone" value="{{old('phone',$client->phone)}}">
</div>

<div class="form-group">

@php
    $maritalStatus = $client->marital_status;
@endphp

    <label for="marital_status" >Estado Civil</label>
    <select class="form-control" id="marital_status" name="marital_status" >
        <option value="" >Escolher...</option>
        <option value="1" {{old('marital_Status',$maritalStatus) == 1?'selected="selected"':''}}>Solteiro</option>
        <option value="2" {{old('marital_Status',$maritalStatus) == 2?'selected="selected"':''}}>Casado</option>
        <option value="3" {{old('marital_Status',$maritalStatus) == 3?'selected="selected"':''}}>Divorciado</option>
    </select>

</div>

<div class="custom-radio">
    <label for="">
        <input type="radio" name="sex" value="m" {{old('sex',$client->sex) == 'm'?'checked="checked"':''}}>Masculino
    </label>
</div>

<div class="custom-radio">
    <label for="">
        <input type="radio" name="sex" value="f" {{old('sex',$client->sex) == 'f'?'checked="checked"':''}}>Feminino
    </label>
</div>

<div class="form-group">
    <label for="physical_disability">Deficiência Física</label>
    <input class="form-control" id="physical_disability" value="{{old('physical_disability',$client->physical_disability)}}">
</div>

<div class="custom-checkbox">
    <label>
        <input type="checkbox" id="defaulter" {{old('defaulter',$client->defaulter)?'checked="checked"':''}}>Inadimplente?
    </label>
</div>