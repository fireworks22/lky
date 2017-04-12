<li class="cai"><a href='{dede:field name='typeurl'/}'>{dede:field name='typename'/}</a>
					<ul>
{dede:sql sql='Select * from dede_arctype where reid=~id~ ORDER BY id limit 0,7'}
<li><a href='[field:typedir/]' target='_blank'>[field:typename/]</a></li>
{/dede:sql}
					</ul>
					</li>