<li class="nav_li1"><a href="{dede:field name='typeurl'/}"  style="font-family:'微软雅黑'">{dede:field name='typename'/}</a>
                    <ul>
                        {dede:channel type='son' noself='yes' }
                        <li><a href='[field:typelink/]'>[field:typename/]</a></li>
                        {/dede:channel}
                    </ul>