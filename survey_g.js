

IE=(navigator.appName.indexOf('Microsoft') >= 0);
NS=(navigator.appName.indexOf('Netscape') >= 0);
SF=(navigator.appName.indexOf('Safari') >= 0);
FF=(navigator.userAgent.indexOf('Firefox') >= 0);
OP=(navigator.userAgent.indexOf('Opera') >= 0);
GK=(navigator.userAgent.indexOf('Gecko') >= 0);
V4=(parseInt(navigator.appVersion) >= 4);
if((V5=navigator.appVersion.indexOf('MSIE '))<0) V5=-5;
V5=(parseInt(navigator.appVersion.charAt(V5+5))>=5);
MAC=(navigator.userAgent.indexOf('Mac')!=-1);

function weCheckForm( frm )
{
	for(var k=0; k<frm.elements.length; ++k)
	{	var obj=frm.elements[k];
		if(obj.type && ('text,textarea,password,file'.indexOf(obj.type.toLowerCase()) >= 0))
		{
			if( obj.value == '')
			{	alert('Please enter required information in the field.');
				obj.focus();
				return false;
			}
		}
	}
	return true;
}


/*--- EndOfFile ---*/
