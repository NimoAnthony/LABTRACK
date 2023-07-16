import 'package:flutter/material.dart';
import 'package:labtrack_homepage/admin-dashboard.dart';
import 'package:labtrack_homepage/main.dart';

class ItemTable extends StatelessWidget {
  static const routeName = '/item_table';

  void _navigateAdminDashboardState(BuildContext context) {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => AdminDashboard()),
    );
  }

  void _navigateLoginFormState(BuildContext context) {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => LoginForm()),
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        actions: [
          IconButton(
            icon: Icon(Icons.update),
            onPressed: () {
              // Handle update action
            },
          ),
          IconButton(
            icon: Icon(Icons.notifications),
            onPressed: () {
              // Handle notification action
            },
          ),
          PopupMenuButton(
            itemBuilder: (BuildContext context) => [
              PopupMenuItem(
                child: ListTile(
                  leading: Icon(Icons.logout),
                  title: Text('Logout'),
                  onTap: () => _navigateLoginFormState(context),
                  // Handle logout action
                ),
              ),
              PopupMenuItem(
                child: ListTile(
                  leading: Icon(Icons.person),
                  title: Text('Profile'),
                  onTap: () {
                    // Handle profile action
                  },
                ),
              ),
            ],
            icon: Icon(Icons.person), // Set the user icon here
          ),
        ],
      ),
      drawer: Drawer(
        child: ListView(
          children: [
            DrawerHeader(
              decoration: BoxDecoration(
                color: Colors.grey,
              ),
              child: Column(
                children: [
                  Image.asset(
                    'assets/bsu-logo.png', // Replace with your image location
                    height: 130,
                    width: 130,
                  ),
                ],
              ),
            ),
            ListTile(
              title: Text('Dashboard'),
              leading: Icon(Icons.dashboard),
              onTap: () => _navigateAdminDashboardState(context),
            ),
            ListTile(
              title: Text('Laboratory Resources'),
              leading: Icon(Icons.science),
              onTap: () {
                _navigateToItemTableState(context);
              },
            ),
            ExpansionTile(
              title: Text('Transactions'),
              leading: Icon(Icons.newspaper),
              children: [
                ListTile(
                  title: Text('Request'),
                  leading: Icon(Icons.request_page),
                  onTap: () {
                    // Handle request navigation
                  },
                ),
                ListTile(
                  title: Text('Make New Requests'),
                  leading: Icon(Icons.add_box),
                  onTap: () {
                    // Handle make new requests navigation
                  },
                ),
                ListTile(
                  title: Text('Borrowed Tools'),
                  leading: Icon(Icons.science),
                  onTap: () {
                    // Handle borrowed items navigation
                  },
                ),
                ListTile(
                  title: Text('Return Items'),
                  leading: Icon(Icons.assignment_return),
                  onTap: () {
                    // Handle return items navigation
                  },
                ),
              ],
            ),
            ListTile(
              title: Text('Borrowers'),
              leading: Icon(Icons.person),
              onTap: () {
                // Handle borrowers navigation
              },
            ),
            ListTile(
              title: Text('Rooms'),
              leading: Icon(Icons.room_preferences),
              onTap: () {
                // Handle rooms navigation
              },
            ),
            ListTile(
              title: Text('Inventory'),
              leading: Icon(Icons.inventory_2),
              onTap: () {
                // Handle inventory navigation
              },
            ),
            ListTile(
              title: Text('Graphs'),
              leading: Icon(Icons.area_chart_sharp),
              onTap: () {
                // Handle graphs navigation
              },
            ),
            ListTile(
              title: Text('Users'),
              leading: Icon(Icons.supervised_user_circle_sharp),
              onTap: () {
                // Handle users navigation
              },
            ),
            ListTile(
              title: Text('History'),
              leading: Icon(Icons.history),
              onTap: () {
                // Handle history navigation
              },
            ),
          ],
        ),
      ),
      body: Padding(
        padding: EdgeInsets.all(10),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Row(
              children: [
                Expanded(
                  child: Container(
                    height: 35,
                    decoration: BoxDecoration(
                      color: Colors.white,
                      borderRadius: BorderRadius.circular(5),
                      border: Border.all(color: Colors.grey, width: 1),
                    ),
                    child: Row(
                      children: [
                        Padding(
                          padding: EdgeInsets.only(left: 8, right: 4),
                          child: Icon(Icons.search),
                        ),
                        Expanded(
                          child: TextField(
                            decoration: InputDecoration(
                              border: InputBorder.none,
                              hintText: 'Search...',
                            ),
                          ),
                        ),
                      ],
                    ),
                  ),
                ),
                SizedBox(width: 10),
                ElevatedButton.icon(
                  onPressed: () {
                    // Handle "Add Item" button action
                  },
                  icon: Icon(Icons.add),
                  label: Text('Add Item'),
                  style: ButtonStyle(
                    backgroundColor: MaterialStateProperty.all<Color>(Colors.lightBlue),
                  ),
                ),
              ],
            ),
            SizedBox(height: 10),
            Row(
              mainAxisAlignment: MainAxisAlignment.spaceBetween,
              children: [
                SizedBox(
                  width: 60,
                  height: 30,
                  child: ElevatedButton(
                    onPressed: () {
                      // Handle Copy button action
                    },
                    child: Text(
                      'Copy',
                      style: TextStyle(fontSize: 12, fontWeight: FontWeight.bold),
                    ),
                  ),
                ),
                SizedBox(width: 10),
                SizedBox(
                  width: 56,
                  height: 30,
                  child: ElevatedButton(
                    onPressed: () {
                      // Handle CSV button action
                    },
                    child: Text(
                      'CSV',
                      style: TextStyle(fontSize: 12, fontWeight: FontWeight.bold),
                    ),
                  ),
                ),
                SizedBox(width: 10),
                SizedBox(
                  width: 65,
                  height: 30,
                  child: ElevatedButton(
                    onPressed: () {
                      // Handle Excel button action
                    },
                    child: Text(
                      'Excel',
                      style: TextStyle(fontSize: 12, fontWeight: FontWeight.bold),
                    ),
                  ),
                ),
                SizedBox(width: 10),
                SizedBox(
                  width: 55,
                  height: 30,
                  child: ElevatedButton(
                    onPressed: () {
                      // Handle PDF button action
                    },
                    child: Text(
                      'PDF',
                      style: TextStyle(fontSize: 12, fontWeight: FontWeight.bold),
                    ),
                  ),
                ),
                SizedBox(width: 10),
                SizedBox(
                  width: 65,
                  height: 30,
                  child: ElevatedButton(
                    onPressed: () {
                      // Handle Print button action
                    },
                    child: Text(
                      'Print',
                      style: TextStyle(fontSize: 12, fontWeight: FontWeight.bold),
                    ),
                  ),
                ),
              ],
            ),
            SizedBox(height: 10),
            Container(
              width: 380,
              child: SingleChildScrollView(
                scrollDirection: Axis.horizontal,
                child: Card(
                  shape: RoundedRectangleBorder(
                    side: BorderSide(color: Colors.grey, width: 1),
                    borderRadius: BorderRadius.circular(10),
                  ),
                  child: DataTable(
                    dataRowColor: MaterialStateColor.resolveWith((states) => Colors.grey.shade200),
                    headingRowColor: MaterialStateColor.resolveWith((states) => Colors.grey.shade400),
                    dividerThickness: 1,
                    columns: [
                      DataColumn(label: Text('Image')),
                      DataColumn(label: Text('Name')),
                      DataColumn(label: Text('Category')),
                      DataColumn(label: Text('Brand')),
                      DataColumn(label: Text('Quantity')),
                      DataColumn(label: Text('Quantity Left')),
                      DataColumn(label: Text('Status')),
                      DataColumn(label: Text('Action')),
                    ],
                    rows: [
                      ...List<DataRow>.generate(
                        1,
                            (index) => DataRow(
                          cells: [
                            DataCell(
                              Image.asset(
                                'assets/Beaker.jpg', // Replace with your image location
                                height: 40,
                                width: 50,
                              ),
                            ),
                            DataCell(Text('Beaker')),
                            DataCell(Text('Tools')),
                            DataCell(Text('FisherBrand')),
                            DataCell(Text('100')),
                            DataCell(Text('95')),
                            DataCell(Text('New')),
                            DataCell(Text('More info')),
                          ],
                        ),
                      ),
                      DataRow(
                        cells: [
                          DataCell(
                            Image.asset(
                              'assets/chemi.jpg', // Replace with your image location
                              height: 40,
                              width: 50,
                            ),
                          ),
                          DataCell(Text('Potassium Chloride')),
                          DataCell(Text('Chemicals')),
                          DataCell(Text('Dalkem')),
                          DataCell(Text('50 Bottles')),
                          DataCell(Text('35')),
                          DataCell(Text('Used')),
                          DataCell(Text('More Info')),
                        ],
                      ),
                    ],
                  ),
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }

  void _navigateToItemTableState(BuildContext context) {
    Navigator.pushNamed(context, ItemTable.routeName);
  }
}
