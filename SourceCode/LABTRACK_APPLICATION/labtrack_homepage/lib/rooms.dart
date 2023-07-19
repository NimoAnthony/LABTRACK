import 'package:flutter/material.dart';
import 'package:labtrack_homepage/admin-dashboard.dart';
import 'package:labtrack_homepage/main.dart';
import 'package:labtrack_homepage/side_borrower.dart';

import 'item_table.dart';

class Rooms extends StatelessWidget {
  static const routeName = '/rooms';

  void _navigateAdminDashboardState(BuildContext context) {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => AdminDashboard()),
    );
  }

  void _navigateToSideBorrower(BuildContext context) {
    Navigator.push(context,
      MaterialPageRoute(builder: (context) => SideBorrower()),
    );
  }
  void _navigateToRooms(BuildContext context) {
    Navigator.push(context,
      MaterialPageRoute(builder: (context) => Rooms()),
    );
  }

  void _navigateToItemTable(BuildContext context) {
    Navigator.push(context,
      MaterialPageRoute(builder: (context) => ItemTable()),
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
            itemBuilder: (BuildContext context) =>
            [
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
                _navigateToItemTable(context);
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
              onTap: () => _navigateToSideBorrower(context),
              // Handle borrowers navigation
            ),
            ListTile(
              title: Text('Rooms'),
              leading: Icon(Icons.room_preferences),
              onTap: () => _navigateToRooms(context),
                // Handle rooms navigation

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
            Text(
              'Rooms',
              style: TextStyle(
                fontSize: 24,
                fontWeight: FontWeight.bold,
              ),
            ),
            SizedBox(height: 10),
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
                    backgroundColor: MaterialStateProperty.all<Color>(
                        Colors.green),
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
                    style: ButtonStyle(
                        backgroundColor: MaterialStateProperty.all<Color>(Colors.green)
                    ),
                    onPressed: () {
                      // Handle Copy button action
                    },
                    child: Text(
                      'Copy',
                      style: TextStyle(
                          fontSize: 12, fontWeight: FontWeight.bold),
                    ),
                  ),
                ),
                SizedBox(width: 10),
                SizedBox(
                  width: 56,
                  height: 30,
                  child: ElevatedButton(
                    style: ButtonStyle(
                        backgroundColor: MaterialStateProperty.all<Color>(Colors.green)
                    ),
                    onPressed: () {
                      // Handle CSV button action
                    },
                    child: Text(
                      'CSV',
                      style: TextStyle(
                          fontSize: 12, fontWeight: FontWeight.bold),
                    ),
                  ),
                ),
                SizedBox(width: 10),
                SizedBox(
                  width: 65,
                  height: 30,
                  child: ElevatedButton(
                    style: ButtonStyle(
                        backgroundColor: MaterialStateProperty.all<Color>(Colors.green)
                    ),
                    onPressed: () {
                      // Handle Excel button action
                    },
                    child: Text(
                      'Excel',
                      style: TextStyle(
                          fontSize: 12, fontWeight: FontWeight.bold),
                    ),
                  ),
                ),
                SizedBox(width: 10),
                SizedBox(
                  width: 55,
                  height: 30,
                  child: ElevatedButton(
                    style: ButtonStyle(
                        backgroundColor: MaterialStateProperty.all<Color>(Colors.green)
                    ),
                    onPressed: () {
                      // Handle PDF button action
                    },
                    child: Text(
                      'PDF',
                      style: TextStyle(
                          fontSize: 12, fontWeight: FontWeight.bold),
                    ),
                  ),
                ),
                SizedBox(width: 10),
                SizedBox(
                  width: 65,
                  height: 30,
                  child: ElevatedButton(
                    style: ButtonStyle(
                        backgroundColor: MaterialStateProperty.all<Color>(Colors.green)
                    ),
                    onPressed: () {
                      // Handle Print button action
                    },
                    child: Text(
                      'Print',
                      style: TextStyle(
                          fontSize: 12, fontWeight: FontWeight.bold),
                    ),
                  ),
                ),
              ],
            ),
            SizedBox(height: 10),
            Container(
              width: double.infinity,
              child: SingleChildScrollView(
                scrollDirection: Axis.horizontal,
                child: Card(
                  shape: RoundedRectangleBorder(
                    side: BorderSide(color: Colors.grey, width: 1),
                    borderRadius: BorderRadius.circular(10),
                  ),
                  child: SizedBox(
                    width: 368, // Set the desired width for the table
                    child: DataTable(
                      dataRowColor: MaterialStateColor.resolveWith((states) => Colors.grey.shade200),
                      headingRowColor: MaterialStateColor.resolveWith((states) => Colors.grey.shade400),
                      dividerThickness: 1,
                      columns: [
                        DataColumn(
                          label: Text('Room Name'),
                          numeric: false,
                          tooltip: 'Room Name',
                        ),
                        DataColumn(
                          label: Text('Action'),
                          numeric: false,
                          tooltip: 'Action',
                        ),
                      ],
                      rows: [
                        ...List<DataRow>.generate(
                          1,
                              (index) => DataRow(
                            cells: [
                              DataCell(Text('301')),
                              DataCell(
                                ElevatedButton(
                                  onPressed: () {
                                    // Handle action button press
                                  },
                                  child: Text('Action'),
                                ),
                              ),
                            ],
                          ),
                        ),
                        DataRow(
                          cells: [
                            DataCell(Text('302')),
                            DataCell(
                              ElevatedButton(
                                onPressed: () {
                                  // Handle action button press
                                },
                                child: Text('Action'),
                              ),
                            ),
                          ],
                        ),
                      ],
                    ),
                  ),
                ),
              ),
            ),



          ],
        ),
      ),
    );
  }
}