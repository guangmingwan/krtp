//index.js
//获取应用实例
var app = getApp()
var types = ['default', 'primary', 'warn']
var pageObject = {
  data: {
    title: '查找纺织原料',
    sub_title: '录入查找条件：',
    defaultSize: 'default',
    primarySize: 'default',
    warnSize: 'default',
    disabled: false,
    plain: false,
    
    searchtype: 0,
    search0Key: ["zhi_number", "ingredients", "color", "color_number", "method", "weight"],
    search1Key: ["name", "library", "zhen_number", "width", "goods_weight", "weight", "notes"],
    searchData: { "name": "", "library": "", "zhi_number": "", "zhen_number": "", "ingredients": "", "color": "", "color_number": "", "method": "", "goods_weight": "", "weight": "", "width": "", "notes": "" },
    searchDataO: {},
    toast1Hidden: true,
    modalHidden: true,
    loading: false,
  },
  searchDataChange: function (e) {
    var skeyindex = parseInt(e.currentTarget.dataset.id);
    var skeystr = "";
    if(this.data.searchtype == 0) { //search 原料      
      skeystr = this.data.search0Key[skeyindex];      
    }
    else if(this.data.searchtype == 1) { //search 余坯
      skeystr = this.data.search1Key[skeyindex];
    }
    var sObj = {};
    sObj[skeystr] = e.detail.value;
    console.log(sObj)
    this.data.searchData[skeystr] = e.detail.value;
  },
  toast1Change: function (e) {
    this.setData({ toast1Hidden: true });
  },
  setDisabled: function (e) {
    this.setData({
      disabled: !this.data.disabled
    })
  },
  setPlain: function (e) {
    this.setData({
      plain: !this.data.plain
    })
  },
  setLoading: function (e) {
    this.setData({
      loading: !this.data.loading
    })
  },
  onLoad: function (options) {
    this.setData({
      searchtype: options.searchtype,
      searchDataO: this.data.searchData
    })
    switch (options.searchtype) {
      case "0":
        pageObject.data.title = "查找纺织原料";
        break;
      case "1":
        pageObject.data.title = "查找余胚";
        break;
    }
    wx.setNavigationBarTitle({
      title: pageObject.data.title
    })
  },
  reset: function(e) {
    this.setData({
      searchData: this.data.searchDataO
    })
    
  },
  search: function (e) {
    var that = this;
    var app = getApp();
    var url = app.globalData.rooturl + '/post/search?type=' + this.data.searchtype
    this.setLoading();
    wx.request({
      url: url,
      data: this.data.searchData,
      method: 'get',
      header: {
        'Content-Type': 'application/json'
      },
      success: function (res) {
        console.log(res.data)
        if (res.data.code == 200) {
          var app = getApp();
          app.globalData.searchData = that.data.searchData;
          app.globalData.searchResult = res.data;
          that.setData({
            loading: false,
          })
          if(res.data.posts.length >0) {
            wx.navigateTo({
              url: '/pages/search/result',
            })
          }
          else {
            that.setData({
              loading: false,
              modalHidden: true,
              toast1Hidden: false,
              notice_str: "没有找到记录",
            });
          }
        }
        else {
          that.setData({
            loading: false,
            modalHidden: true,
            toast1Hidden: false,
            notice_str: "服务器内部发生故障",
          });
        }
      }
    })
  }
}

for (var i = 0; i < types.length; ++i) {
  (function (type) {
    pageObject[type] = function (e) {
      var key = type + 'Size'
      var changedData = {}
      changedData[key] =
        this.data[key] === 'default' ? 'mini' : 'default'
      this.setData(changedData)
    }
  })(types[i])
}

Page(pageObject)
