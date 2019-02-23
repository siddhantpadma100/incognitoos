  <div class="side-menu">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Main Menu -->
            <div class="side-menu-container">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.jsp">Dashboard</a></li>
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-lvl2"> user <span class="caret"></span></a>
                        <div id="dropdown-lvl2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <li><a href="acad.jsp">pending certificate</a></li>
                                    <li><a href="dept.jsp">Department-wise report</a></li>
                                    <li><a href="insti.jsp">Institute-wise report</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="closing.jsp">Closing stock</a></li>
                    <li><a href="gen.jsp">Generate requirement</a></li>
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-lvl1"> Item <span class="caret"></span></a>
                        <div id="dropdown-lvl1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <li><a href="additem.jsp">Add item</a></li>
                                    <li><a href="deleteitem.jsp">Delete Item</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="..\error.jsp">Logout</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    </div>