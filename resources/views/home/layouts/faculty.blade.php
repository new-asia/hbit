<div style="width:1200px;height:740px;">
    @foreach($data as $v)
    <div style="width:210px; height:740px; float:left; margin-right:18.75px;">
        <div style=" height:410px;width:210px;">
            <a href="/Faculty/show-{{$v->teacher_id}}.html"><img src="{{$v->teacher_portrait_src}}" style="height:410px; width:210px;" height="410" width="210" /></a>
        </div>
        <div style="height:290px; width:188px; border:1px solid #F5F3F3;padding-left: 10px;padding-right: 10px;">
            <a href="/Faculty/show-{{$v->teacher_id}}.html"><div style="height:50px; line-height:50px; font-size:24px;">
                    {{$v->name}}
                </div>
                <div style="height:40px; line-height:40px; font-size:18px;">
                    {{$v->position_name}}
                </div>
                <div style="height:200px; line-height:21px; font-size:12px; width:188px;">
                    {{$v->details}}
                </div></a>
        </div>
    </div>
    @endforeach
</div>